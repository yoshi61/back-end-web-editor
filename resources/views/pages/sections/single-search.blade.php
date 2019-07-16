<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 industry" id="select-industry">
            <select id="industry-autocomplete" class="selectpicker" data-show-subtext="true" data-live-search="true">
                <option value="all">Select Industry (General)</option>
                @foreach ( $divisions as $division => $sub_divisions )
                    @foreach ( $sub_divisions as $sub_division )
                        <option value="{{$sub_division}}">{{$sub_division}}</option>
                    @endforeach
                @endforeach
            </select>
        </div>
    </div>
</div>