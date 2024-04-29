@props(['type','message'])
<div class="alert mb-4 position-absolute bottom-0 end-0 w-25 m-auto center alert-{{$type}} " role="alert">
    {{$slot}}
    
</div>