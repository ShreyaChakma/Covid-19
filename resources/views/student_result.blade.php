<table width="100%">

<tr>
<td>Name</td>
<td>Address </td>
<td>Education </td>
</tr>

@foreach($information as $info)

 <tr>

@foreach($info as $key => $value)
    

       
           @if($key == 'name')
           <td>  {{ $value }}</td>
           @endif

           @if($key == 'address')
           <td>
                Present address :
                @foreach($value['present'] as $a => $b)
                {{ $b }} 
                @endforeach

                <br>

                Permanent address :
                @foreach($value['permanent'] as $k => $v)
                {{ $v }} 
                @endforeach
            </td>
           @endif
        
           @if($key == 'education')
           <td>
              @foreach($value as $k => $va)
              {{ $k }} - {{ $va }} <br>
              @endforeach
           </td>

           @endif
          
    

@endforeach
</tr>
@endforeach

</table>