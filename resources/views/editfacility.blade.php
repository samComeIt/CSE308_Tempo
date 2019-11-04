  <!doctype html>
    <html lang="{{ app()->getLocale() }}">
    
         <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                @foreach ($facilities as $facility)
                <head>
        <title>Edit Facility: {{$facility->Name}}</title>
        <!-- Styles etc. -->
    </head>

                             <form action="{{ route('facility.update',$facility->Facility_ID) }}" method="POST">
        @csrf
        @method('PUT')
                    <h1> Enter Details to edit {{$facility->Name}}</h1>
                    <div class="form-input">
                        <label>Name</label> <input type="text" name="Name" value={{ $facility->Name }}>
                    </div>

                    <div class="form-input">
                        <label>Location</label> <input type="text" name="Location" value={{ $facility->Location }}>
                    </div>

                    <div class="form-input">
                        <label>Category</label> <input type="text" name="Category" value={{ $facility->Category }}>
                    </div>

                    <div class="form-input">
                        <label>Type</label> <input type="text" name="Type" value={{ $facility->Type }}>
                    </div>
                    
                    <div class="form-input">
                        <label>Capacity</label> <input type="number" name="Capacity" value={{ $facility->Capacity }}>
                    </div>
                    
                    <div class="form-group">
                        <label>Picture</label> <input type="file" name="Picture" value={{ $facility->Picture }}>
                    </div>
                    
                    <div class="form-input">
                        <label>Status</label> <input type="text" name="Status" value={{ $facility->Status }}>
                    </div>

                  
                    <a class="btn btn-primary" href="{{ route('facility.index')}}">Cancel</a>         
                       
                    <button type="submit" class="btn btn-danger">Update</button>
                             
                                 
                    @endforeach
                </form>
            </div>
        </div>
    </body>
        </html>