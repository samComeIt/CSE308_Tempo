<!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
      <title>Create Facility | Facilities</title>
      <!-- styling etc. -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form method="POST" action="/facility">
                    @csrf
                    
                    <h1> Enter Details to create a facility</h1>
                    <div class="form-input">
                        <label>Name</label> <input type="text" name="Name">
                    </div>

                    <div class="form-input">
                        <label>Location</label> <input type="text" name="Location">
                    </div>

                    <div class="form-input">
                        <label>Category</label> <input type="text" name="Category">
                    </div>

                    <div class="form-input">
                        <label>Type</label> <input type="text" name="Type">
                    </div>
                    
                    <div class="form-input">
                        <label>Capacity</label> <input type="number" name="Capacity">
                    </div>
                    
                    <div class="form-input">
                        <label>Picture</label> <input type="text" name="Picture">
                    </div>
                    
                    <div class="form-input">
                        <label>Status</label> <input type="text" name="Status">
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
    </html>