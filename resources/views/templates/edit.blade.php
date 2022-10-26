<div class="modal-content-edit" id="ModalEdit{{ $task->id }}">
    <div class="modal-body">
        <x-eos-close width="24" height="24" onclick="ModalEdit.close()" class="modal-close" />
        <div class="modal-header">
            <h3>Edit task</h3>
        </div>

        <form action="/task/{{ $task->id }}" method="post" class="form">
            @method('PUT')
            @csrf
            <div class="input-name">
                <label for="name">Task Name:</label>
                <input type="text" id="name" name="name" placeholder="Name" value="{{ $task->name }}" class="name-input" />
            </div>

            <div class="input-label">
                <label for="label">Days of Week:</label>
                <input type="text" id="label" name="label" placeholder="Days of Week" value="{{ $task->label }}" class="label-input" />
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