  <!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <title>View Facility | Facilities</title>
        <!-- Styles etc. -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          
            
            <div class="content">
                <h1>Here's a list of available facilities</h1>
                <table>
                    <thead>
                        <td>Name</td>
                        <td>Location</td>
                        <td>Category</td>
                        <td>Type</td>
                        <td>Capacity</td>
                        <td>Picture</td>
                        <td>Status</td>
                        <td>Action</td>
                    </thead>
                    <tbody>
                        
                        @foreach ($facilities as $facility)
                         <form action="{{ route('facility.destroy',$facility->Facility_ID) }}" method="POST">
                            <tr>
                                <td>{{ $facility->Name }}</td>
                                <td class="inner-table">{{ $facility->Location }}</td>
                                <td class="inner-table">{{ $facility->Category }}</td>
                                <td class="inner-table">{{ $facility->Type }}</td>
                                <td class="inner-table">{{ $facility->Capacity }}</td>
                                <td class="inner-table">{{ $facility->Picture }}</td>
                                <img class="inner-table" src="{{url('uploads/'.$facility->Picture)}}" alt="{{$facility->Picture}}">
                                <td class="inner-table">{{ $facility->Status }}</td>
                               <td><a class="btn btn-primary" href="{{ route('facility.edit',$facility->Facility_ID) }}" method="GET">Edit</a></td>
   
                    @csrf
                    @method('DELETE')
                          <td><button type="submit" class="btn btn-danger">Delete</button>   </td>
                             
                             </tr>            
                    @endforeach
                              </form>
                    </tbody>
                </table>
            </div>
         
        </div>
    </body>
    </html>