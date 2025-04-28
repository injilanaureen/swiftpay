<style>
    body {
        background-color: #1e1e2f;
        color: #f1f1f1;
        font-family: Arial, sans-serif;
    }

    .admin-panel {
        background: #2a2a3d;
        padding: 20px;
        border-radius: 8px;
    }

    .admin-panel h3 {
        border-bottom: 1px solid #433e4d;
        padding-bottom: 10px;
        margin-bottom: 20px;
        color: #fff;
    }

    .welcome-text {
        color: #00ff00;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }

    form input,
    form button {
        margin: 5px 5px 5px 0;
        padding: 6px 10px;
        border: none;
        border-radius: 4px;
    }

    form input {
        background-color: #444;
        color: #fff;
    }

    form button {
        background-color: #007bff;
        color: white;
        cursor: pointer;
    }

    form button:hover {
        background-color: #0056b3;
    }

    .navbar-item {
        margin-bottom: 20px;
        padding: 15px;
        background-color: #383854;
        border-radius: 6px;
    }

    .sub-items {
        display: none;
        margin-top: 10px;
        padding-left: 20px;
    }

    .navbar-item.open .sub-items {
        display: block;
    }

    .toggle-btn {
        cursor: pointer;
        color: #00ffff;
        font-weight: bold;
        font-size: 16px;
    }

    .form-inline {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
    }

    .editable {
        display: inline-block;
        margin-right: 15px;
        background: #333;
        padding: 4px 8px;
        border-radius: 4px;
        color: #ccc;
    }

    .editable span {
        margin-left: 6px;
        color: #00ffff;
        cursor: pointer;
    }

    .edit-form {
        display: none;
        margin-top: 5px;
    }

    .edit-form input {
        margin: 5px;
    }

    .edit-form button {
        background-color: #28a745;
        color: white;
        border: none;
        margin-right: 5px;
        padding: 4px 8px;
        border-radius: 4px;
    }

    .edit-form button[type="button"] {
        background-color: #6c757d;
    }

    .actions {
        display: flex;
        gap: 10px;
        margin-top: 10px;
        flex-wrap: wrap;
    }

    .sub-item-block {
        margin: 10px 0;
        background-color: #444;
        padding: 10px;
        border-radius: 6px;
    }

    .sub-item-fields {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 10px;
    }

    .sub-item-fields form {
        margin: 0;
    }
</style>

<div class="admin-panel">
    <h3>Navbar Categories</h3>

    <!-- Add Navbar Item -->
    <form class="form-inline" action="{{ route('admin.storeNavbarItem') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Navbar Item Name" required>
        <input type="text" name="url" placeholder="URL" required>
        <input type="number" name="position" placeholder="Position" required>
        <button type="submit">Add Navbar Item</button>
    </form>

    <ul style="list-style: none; padding: 0;">
        @foreach($navbarItems as $item)
            <li class="navbar-item">
                <!-- Toggle -->
                <div class="toggle-btn" onclick="toggleItem({{ $item->id }})">
                    ▶ {{ $item->name }} (Position: {{ $item->position }})
                </div>

                <!-- Edit / Delete Main Navbar Item -->
                <div class="actions">
                    <form class="form-inline" action="{{ route('admin.updateNavbarItem', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" name="name" value="{{ $item->name }}" required>
                        <input type="text" name="url" value="{{ $item->url }}">
                        <input type="number" name="position" value="{{ $item->position }}" required>
                        <button type="submit">Update</button>
                    </form>

                    <form action="{{ route('admin.destroyNavbarItem', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Delete this item?')" type="submit">Delete</button>
                    </form>
                </div>

                <!-- Sub Items -->
                <div id="sub-items-{{ $item->id }}" class="sub-items">
                    <!-- Add Sub-Item -->
                    <form class="form-inline" action="{{ route('admin.storeNavbarSubItem', $item->id) }}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Sub-item Name" required>
                        <input type="text" name="url" placeholder="URL"/>
                        <input type="number" name="position" placeholder="Position" required>
                        <button type="submit">Add Sub-item</button>
                    </form>

                    <ul style="padding-left: 0;">
                        @foreach($item->subItems as $subItem)
                            <li class="sub-item-block">
                                <div class="sub-item-fields" data-id="{{ $subItem->id }}">
                                    <span class="editable" data-field="name">{{ $subItem->name }}<span title="Edit">✏️</span></span>
                                    <span class="editable" data-field="url">{{ $subItem->url }}<span title="Edit">✏️</span></span>
                                    <span class="editable" data-field="position">{{ $subItem->position }}<span title="Edit">✏️</span></span>

                                    <!-- Hidden Edit Form -->
                                    <form class="edit-form" action="{{ route('admin.updateNavbarSubItem', $subItem->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="name" placeholder="Name">
                                        <input type="text" name="url" placeholder="URL">
                                        <input type="number" name="position" placeholder="Position">
                                        <button type="submit">Update</button>
                                        <button type="button" onclick="cancelEdit(this)">Cancel</button>
                                    </form>

                                    <!-- Delete Sub-Item -->
                                    <form action="{{ route('admin.destroyNavbarSubItem', $subItem->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Delete sub-item?')" type="submit">Delete</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<script>
    function toggleItem(id) {
        const el = document.getElementById('sub-items-' + id);
        const parent = el.closest('.navbar-item');
        parent.classList.toggle('open');
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.sub-item-fields .editable span').forEach(pencil => {
            pencil.addEventListener('click', function () {
                const parent = this.closest('.sub-item-fields');
                const field = this.closest('.editable').dataset.field;
                const form = parent.querySelector('.edit-form');
                const input = form.querySelector(`input[name="${field}"]`);

                if (input) {
                    input.value = this.closest('.editable').childNodes[0].nodeValue.trim();
                }

                // Set all values before showing
                ['name', 'url', 'position'].forEach(f => {
                    const el = parent.querySelector(`.editable[data-field="${f}"]`);
                    const input = form.querySelector(`input[name="${f}"]`);
                    if (el && input) {
                        input.value = el.childNodes[0].nodeValue.trim();
                    }
                });

                form.style.display = 'inline-block';
            });
        });
    });

    function cancelEdit(btn) {
        const form = btn.closest('.edit-form');
        form.style.display = 'none';
    }
</script>
