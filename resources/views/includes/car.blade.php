<div class="thumbnail no-border no-padding thumbnail-car-card">
    <div class="media">
        <a class="media-link" data-gal="prettyPhoto"
           href="{{getImagePath(collect(($car->images)->where('type', 'main')->first())['path'])}}">
            <img src="{{getImagePath(collect(($car->images)->where('type', 'main')->first())['path'])}}" alt=""/>
            <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
        </a>
    </div>
    <div class="caption text-center">
        <h4 class="caption-title"><a href="#">{{ $car->name }}</a></h4>
        <div class="caption-text">{{ __('Start from price a day', ['price' => $car->pricePerDay ]) }}</div>
        <div class="buttons">
            <button class="btn btn-theme rent-it" data-id="{{ $car->id }}">
                {{ __('Rent It') }}
            </button>
        </div>
        <table class="table">
            <tr>
                <td><i class="fa fa-dashboard"></i> {{ $car->motor }}</td>
                <td><i class="fa fa-cog"></i> {{ $car->transmission }}</td>
                <td><img style="width: 15px" src="{{ asset('assets/img/door.jpg') }}" alt=""> {{ $car->doors }}</td>
                <td><i class="fa fa-users"></i> {{ $car->passenger }}</td>
            </tr>
        </table>
    </div>
</div>
