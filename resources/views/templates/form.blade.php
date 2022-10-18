<div class="modal-content">
    <div class="modal-body">
        <x-eos-close width="24" height="24" class="modal-close" />
        <div class="modal-header">
            <h3>Create task</h3>
        </div>

        <form action="{{ route('store') }}" method="post">
            <div class="input-name">
                <label for="name">Task Name</label>
                <input type="text" id="name" name="name" placeholder="Name" />
            </div>

            <div class="input-label">
                <label for="label">Days of Week</label>
                <input type="text" id="label" name="label" placeholder="Days of Week" />
            </div>

            <div class="buttons">
                <div class="btn-save">
                    <a href="#">Save</a>
                </div>

                <div class="btn-cancel">
                    <a href="#">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>