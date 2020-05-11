<!DOCTYPE html>
<html lang="en">
<head>
  <title>Votes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Votes Table</h2>
  {{-- <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>             --}}
  <table class="table">
    <thead>
      <tr>
        <th>Total Votes</th>
        <th>Votes For 30 Days</th>
        <th>Votes For 60 Days</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$count}}</td>
        <td>{{$wordCount1}}</td>
        <td>{{$wordCount2}}</td>
      </tr>
    </tbody>
  </table>
  <h2 style="color:rgb(71, 204, 71); text-align:center">Thank You For Voting..</h2>
    <button class="btn btn-info"><a href="/sendmail">Get Result on Mail</a></button>
</div>

</body>
</html>
