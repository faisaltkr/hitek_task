<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <main>

        <div class="container">

        <h1>Handset List</h1>

            <div class="row">

                <form action="/handsets">
                    <div class="row">
                        <div class="col">
                            <select name="brand_id" class="form-control">
                                <option value="">Select Brand</option>
                                @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <select name="price_min" class="form-control">
                                <option value="">Select Price Min</option>
                                <option value="1000">1000</option>
                                <option value="5000">5000</option>
                                <option value="10000">10000</option>
                                <option value="15000">15000</option>
                                <option value="20000">20000</option>
                                <option value="30000">30000</option>
                                <option value="40000">40000</option>
                                <option value="50000">50000</option>
                                <option value="60000">60000</option>
                                <option value="70000">70000</option>
                                <option value="80000">80000</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="price_max" class="form-control">
                                <option value="">Select Price Max</option>
                                 <option value="1000">1000</option>
                                <option value="5000">5000</option>
                                <option value="10000">10000</option>
                                <option value="15000">15000</option>
                                <option value="20000">20000</option>
                                <option value="30000">30000</option>
                                <option value="40000">40000</option>
                                <option value="50000">50000</option>
                                <option value="60000">60000</option>
                                <option value="70000">70000</option>
                                <option value="80000">80000</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" name="features" placeholder="Search Features">
                        </div>
                        <div class="col">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </div>







                </form>
            </div>

        </div>

    </main>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">SlNo</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Release Date</th>
                <th scope="col">Features</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        @foreach($handsets as $key => $handset)
        <tbody>
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $handset->name }}</td>
                <td>{{ $handset->price }}</td>
                <td>{{ $handset->brand_name }}</td>
                <td>{{ $handset->release_date }}</td>
                <td>{{ $handset->features }}</td>

            </tr>
        </tbody>
        @endforeach
    </table>

     {{ $handsets->links() }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>