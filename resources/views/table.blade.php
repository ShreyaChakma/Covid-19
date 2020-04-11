<div class="table-group">
            <table id="data" class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Country</th>
                        <th scope="col">Cases</th>
                        <th scope="col">New Cases</th>
                        <th scope="col">Total Deaths</th>
                        <th scope="col">New Deaths</th>
                        <th scope="col">Recoverd</th>
                        <th scope="col">Active</th>
                        <th scope="col">Critical</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($countries_data as $da)
                    <tr>
                        <td>{{ $da->country}}</td>
                        <td>{{ number_format($da->cases)}}</td>
                        <td class="alert_mark">{{ number_format($da->todayCases)}}</td>
                        <td>{{ number_format( $da->deaths)}}</td>
                        <td class="red_mark">{{ number_format( $da->todayDeaths)}}</td>
                        <td>{{ number_format($da->recovered)}}</td>
                        <td>{{number_format($da->active)}}</td>
                        <td>{{ $da->critical}}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>