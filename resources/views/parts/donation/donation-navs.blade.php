@php
    $amounts = ['15', '25', '40', '75', '100', '120'];
@endphp

<div class="card-header border-0 bg-transparent">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item w-50 px-1" role="presentation">
            <button class="nav-link border-0 w-100 active" id="pills-tab-1" data-toggle="pill" data-target="#pills-1"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true">{!! __("Donate") !!}</button>
        </li>
        <li class="nav-item w-50 px-1" role="presentation">
            <button class="nav-link border-0 w-100" id="pills-tab-2" data-toggle="pill" data-target="#pills-2"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">{!! __("Be a Sponser") !!}</button>
        </li>
    </ul>
</div>
<div class="card-body h-100">
    <div class="tab-content donations-section h-100 " id="pills-tabContent">
        @for ($i = 1; $i < 3; $i++)
            <div @class([
                'tab-pane',
                'h-100',
                'flex-column',
                '',
                'fade',
                'show' => $i === 1,
                'active' => $i === 1,
            ]) id="pills-{{ $i }}" role="tabpanel" aria-labelledby="pills-tab-1">
                <div class="contact-wrap-content d-flex justify-content-between text-center flex-wrap gap-4"
                    >
                    @foreach ($amounts as $key => $value)
                        <label class="label justify-content-center" for="option-{{ $key }}"
                            style="width: calc(33.33% - 1rem) ">
                            <input class="d-none donate-value" type="radio" name="options" id="option-{{ $key }}"
                                value="{{ $value }}" autocomplete="off">
                            {{ $value }}₺
                        </label>
                    @endforeach
                </div>

                <div class="mb-5 mt-auto">
                    <div class="input-group">
                        <input type="text" class="form-control donate-value-end"
                            aria-describedby="validatedInputGroupPrepend" placeholder="1,000,000" required>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validatedInputGroupPrepend">₺</span>
                        </div>
                    </div>
                </div>

            </div>
        @endfor
    </div>
</div>
<div class="card-footer  border-0 bg-transparent ">
    <button class="nav-link btn btn-dark border-0 w-100 justify-content-center"
    type="button">{!! __("Next") !!}</button>
</div>

