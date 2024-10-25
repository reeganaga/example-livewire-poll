<div>
    @forelse ($polls as $poll)
        <div class="mb-4">
            <h2 class="text-xl">{{$poll->title}}</h2>
            @foreach ($poll->options as $option)
            <div class="mb-4">
                <button class="btn">Vote</button>
                <span>{{$option->name}}  ({{$option->votes->count()}})</span>

            </div>
            @endforeach
        </div>
    @empty
        <div class="text-gray-500">No Poll Available</div>
    @endforelse
</div>
