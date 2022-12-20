<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container py-5">
        <form action="{{ url('filter') }}" method="GET" data-select2-id="16">
            <div class="row">
                <div class="col">
                    <select name="from" class="form-select" aria-label="Default select example">
                        <option value="DAC">DAC</option>
                        <option value="IST">IST</option>
                        <option value="DXB">DXB</option>
                        <option value="KUL">KUL</option>
                        <option value="DXB">DXB</option>
                    </select>
                </div>
               <div class="col">
                    <select name="to" class="form-select" aria-label="Default select example">
                        <option value="IST">IST</option>
                        <option value="FCO">FCO</option>
                        <option value="DXB">DXB</option>
                        <option value="KUL">KUL</option>
                    </select>
                </div>
                <div class="col">
                    <select name="class" class="form-select" aria-label="Default select example">
                        <option value="E">E</option>
                        <option value="S">S</option>
                        <option value="O">O</option>
                    </select>
                </div>
                <div class="col">
                    <button class="btn btn-block btn-secondary" type="submit">Search Here</button>
                </div>
            </div>
            </div>
        </form>
    </div>
        <table class="table table-success">
            <thead>
                <tr style="border: 2px solide">
                    <th scope="col">FLIGHT</th>
                    <th scope="col">AIRCRAFT</th>
                    <th scope="col">CLASS</th>
                    <th scope="col">FART</th>
                    <th scope="col">ROUTE</th>
                    <th scope="col">DEPARTURE</th>
                    <th scope="col">ARRIVAl</th>
                    <th scope="col">DURATION</th>
                    <th scope="col">PRICE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($result as $key => $d)
                    <tr>
                        <td>
                            @foreach ($d['flight'] as $r)
                                TK {{ $r }}
                                <br />
                            @endforeach
                        </td>
                        <td>
                            @foreach ($d['aircraft'] as $r)
                                {{ $r }}
                                <br />
                            @endforeach
                        </td>
                        <td>
                            @foreach ($d['class'] as $r)
                                {{ $r }}
                                <br />
                            @endforeach
                        </td>
                        <td>
                            @foreach ($d['fart'] as $r)
                                {{ $r }}
                                <br />
                            @endforeach
                        </td>
                        <td>
                            @foreach ($d['route'] as $r)
                                {{ $r }}
                                <br />
                            @endforeach
                        </td>
                        <td>
                            @foreach ($d['departure'] as $r)
                                {{ $r }}
                                <br />
                            @endforeach
                        </td>
                        <td>
                            @foreach ($d['arrival'] as $r)
                                {{ $r }}
                                <br />
                            @endforeach
                        </td>
                        <td>
                            {{ $d['duration'][0] }}
                        </td>
                        <td>
                            {{ $d['price'][0] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
