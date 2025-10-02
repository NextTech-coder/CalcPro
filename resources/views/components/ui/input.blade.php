@props([
    'label' => 'Название',
    'placeholder' => '',
    'type' => 'text',
    'name' => 'name',
])


<div class="mb-3 text-start">
    <label for="name" class="form-label">Имя</label>
    <input id="name" type="text" class="form-control" name="name" required autofocus>
</div>
