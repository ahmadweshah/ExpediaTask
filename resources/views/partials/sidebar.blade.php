<form id="searchForm" action="/" method="get">
    <div class="form-group">
        <label for="destinationName">Destination</label>
        <select name="destinationName" id="destinationName" class="form-control">
            <option disabled selected>Select city</option>
            @foreach ($cities as $city)
                <option {{ (app('request')->input('destinationName') == $city ? 'selected': '') }}>{{ $city }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="tripStartDate">Check-in</label>
        <input id="startDate" type="text" class="form-control" name="tripStartDate" placeholder="mm/dd/yyyy" autocomplete="off"
               value="{{ app('request')->input('tripStartDate') }}">
    </div>

    <div class="form-group">
        <label for="tripEndDate">Check-out</label>
        <input id="endDate" type="text" class="form-control" name="tripEndDate" placeholder="mm/dd/yyyy" autocomplete="off"
               value="{{ app('request')->input('tripEndDate') }}">
    </div>

    <div class="form-group">
        <label for="minStarRating">Minimum Rating</label>
        <select name="minStarRating" id="minStarRating" class="form-control">
            <option disabled selected>Select rating</option>
            @for ($i = 1; $i <= 5; $i++)
                <option {{ (app('request')->input('minStarRating') == $i ? 'selected': '') }}>{{ $i }}</option>
            @endfor
        </select>
    </div>

    <div class="form-group">
        <label for="maxStarRating">Maximum Rating</label>
        <select name="maxStarRating" id="maxStarRating" class="form-control">
            <option disabled selected>Select rating</option>
            @for ($i = 1; $i <= 5; $i++)
                <option {{ (app('request')->input('maxStarRating') == $i ? 'selected': '') }}>{{ $i }}</option>
            @endfor
        </select>
    </div>

    <div class="form-group">
        <label for="totalRate">Total Price</label>
        <input type="text" id="totalRate" readonly style="border:0; color:#2b2b2b;">
        <input type="hidden" id="minTotalRate" name="minTotalRate" value="<?php echo app('request')->input('minTotalRate') ?? 0; ?>">
        <input type="hidden" id="maxTotalRate" name="maxTotalRate" value="<?php echo app('request')->input('maxTotalRate') ?? 5000; ?>">
        <div id="slider-range"></div>
    </div>

    <input type="hidden" name="search" value="search">

    <button type="submit" class="btn btn-default">Search</button>
</form>

{{--linebreak--}}
<div class="col-xs-12">
    <hr>
</div>