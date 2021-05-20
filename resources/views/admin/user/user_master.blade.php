@csrf
<div class="modal-body">
    <!-- name -->
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Enter name"
        class="form-control name" required max="50">
    </div>
    <!-- email -->
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Enter email"
        class="form-control email" max="50">
    </div>
    <!-- password -->
    <div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password" placeholder="Enter password"
    class="form-control password" min=4>
    </div>
    <!-- type -->
    <div class="form-group">
        <label for="">Type</label>
        <select name="type" class="form-control type" required>
            <option value="">Select user type</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
            <option value="Kicker">Kicker</option>
            <option value="Punter">Punter</option>
            <option value="Long Snapper">Long Snapper</option>
        </select>
    </div>
</div>