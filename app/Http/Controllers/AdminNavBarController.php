<?php

namespace App\Http\Controllers;
use App\Models\NavbarItem;
use App\Models\NavbarSubItem;
use Illuminate\Http\Request;

class AdminNavBarController extends Controller
{
   
    // Dashboard: Displays the admin dashboard with sidebar
    public function dashboard()
    {
        $navbarItems = NavbarItem::with('subItems')->orderBy('position')->get();
        return view('admin.dashboard', compact('navbarItems'));
    }
    public function navbar()
    {
        $navbarItems = NavbarItem::with('subItems')->orderBy('position')->get();
        return view('admin.dashboard', compact('navbarItems'));
    }
    
    public function settings()
    {
        return view('admin.dashboard');
    }
        // Store a new Navbar Item (Main category)
        public function storeNavbarItem(Request $request)
        {
            $request->validate([
                'name' => 'required|string',
                'url' => 'required|string',
                'position' => 'required|integer|min:1',
            ]);
        
            // Shift all items at or after this position
            NavbarItem::where('position', '>=', $request->position)
                ->orderBy('position', 'desc') // very important: update from bottom to avoid clashes
                ->get()
                ->each(function ($item) {
                    $item->position += 1;
                    $item->save();
                });
        
            // Insert the new item
            NavbarItem::create([
                'name' => $request->name,
                'url' => $request->url,
                'position' => $request->position,
            ]);
        
            return back()->with('success', 'Navbar item added and positions updated.');
        }
        

 
    // Delete Navbar Item
    public function destroyNavbarItem($id)
    {
        $navbarItem = NavbarItem::findOrFail($id);
        $navbarItem->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Navbar item deleted successfully.');
    }

    // Store Navbar SubItem (for a specific Navbar Item)
    public function storeNavbarSubItem(Request $request, $navbarItemId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|integer',
        ]);

        $navbarItem = NavbarItem::findOrFail($navbarItemId);
        $navbarItem->subItems()->create([
            'name' => $request->name,
            'url' => $request->url,
            'position' => $request->position,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Navbar sub-item added successfully.');
    }

    // Update Navbar SubItem
    public function updateNavbarItem(Request $request, $id)
    {
        $item = NavbarItem::findOrFail($id);
        $request->validate([
            'name' => 'required|string',
            'url' => 'required|string',
            'position' => 'required|integer|min:1',
        ]);
    
        // If position has changed, handle shifting
        if ($item->position != $request->position) {
            // Shift down other items if new position is taken
            NavbarItem::where('id', '!=', $item->id)
                ->where('position', '>=', $request->position)
                ->orderBy('position', 'desc')
                ->get()
                ->each(function ($other) {
                    $other->position += 1;
                    $other->save();
                });
        }
    
        $item->update([
            'name' => $request->name,
            'url' => $request->url,
            'position' => $request->position,
        ]);
    
        return back()->with('success', 'Navbar item updated.');
    }
    

    // Delete Navbar SubItem
    public function destroyNavbarSubItem($id)
    {
        $navbarSubItem = NavbarSubItem::findOrFail($id);
        $navbarSubItem->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Navbar sub-item deleted successfully.');
    }
}
