<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 100%;
            table-layout: fixed;
        }

        table caption {
            font-size: 1.5em;
            margin: .5em 0 .75em;
        }

        table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .35em;
        }

        table th,
        table td {
            padding: .625em;
            text-align: center;
        }

        table th {
            font-size: .85em;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        @media screen and (max-width: 600px) {
            table {
                border: 0;
            }

            table caption {
                font-size: 1.3em;
            }

            table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            table tr {
                border-bottom: 3px solid #ddd;
                display: block;
                margin-bottom: .625em;
            }

            table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .8em;
                text-align: right;
            }

            table td::before {
                /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            table td:last-child {
                border-bottom: 0;
            }
        }


        /* general styling */
        body {
            font-family: "Poppins", sans-serif;
            line-height: 1.25;
        }

        .extra-info {
            text-align: center;
        }

        .paragraph-text {
            color: #636363;
        }
    </style>
</head>

<body>
    <table>
        <caption>Congratulation, Your request is successful. 😁</caption>
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Product for</th>
                <th scope="col">Vehicle Model</th>
                <th scope="col">Vehicle Manufacturing Year</th>
                <th scope="col">Message</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ucfirst($request->name)}}</td>
                <td>{{$request->for}}</td>
                <td>{{$request->model}}</td>
                <td>{{$request->manufacturing}}</td>
                <td>{{$request->textarea}}</td>
            </tr>
        </tbody>
    </table>
    <div class="extra-info">
        <p class="paragraph-text">If you want to cancel the booking then please do delete your booking from the
            Dashboard or Add Booking
        </p>
    </div>
    <h5>Thanks,<br>
        {{ config('app.name') }}
    </h5>

</body>

</html>