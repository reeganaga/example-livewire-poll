<div>
    <form>
        <label>Poll Title</label>
        <input type="text" wire:model.live="title" />
        <div>Current title: {{ $title }}</div>
        <button class="btn" wire:click.prevent="addOption">Add Option</button>
    </form>
    <div class="mb-4">
        @foreach ($options as $index => $option)
            <div>{{ $index }}. {{ $option }}</div>
        @endforeach
    </div>

</div>
