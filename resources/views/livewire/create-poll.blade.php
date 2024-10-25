<div>
    <form>
        <label>Poll Title</label>
        <input type="text" wire:model.live="title" class="mb-4" />
        @error('title')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <button class="btn" wire:click.prevent="addOption">Add Option</button>
        <div class="mb-4">
            @foreach ($options as $index => $option)
                <div class="mb-2">
                    <div>Option {{ $index + 1 }}</div>
                    <div class="flex gap-2">
                        <input type="text" wire:model.live="options.{{ $index }}" />
                        <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                    </div>
                    @error("options.{$index}")
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            @endforeach
        </div>
        <button class="btn" wire:click.prevent="createPool">Submit</button>
    </form>

</div>
