<div class="modal-content">
    <div class="modal-body">
        <x-eos-close width="24" height="24" class="modal-close" />
        <div class="modal-header">
            <h3>Create task</h3>
        </div>

        <form action="{{ route('store') }}" method="post" class="form">
            @csrf
            <div class="input-name">
                <label for="name">Task Name:</label>
                <input type="text" id="name" name="name" placeholder="Name" />
            </div>

            <div class="input-label">
                <label for="label">Days of Week:</label>
                <input type="text" id="label" name="label" placeholder="Days of Week" />
            </div>

            <div class="buttons">
                <div class="btn-save">
                    <button type="submit">Save</button>
                </div>

                <div class="btn-cancel">
                    <button type="submit">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>