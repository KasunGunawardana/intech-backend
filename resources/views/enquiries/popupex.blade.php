<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title>Enquiry From INTECH Contact Form</title>
    <style>
        *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

table {
  max-width: 960px;
  margin: 10px auto;
}

caption {
  font-size: 1.6em;
  font-weight: 400;
  padding: 10px 0;
}

thead th {
  font-weight: 400;
  background: #8a97a0;
  color: #FFF;
}

tr {
  background: #f4f7f8;
  border-bottom: 1px solid #FFF;
  margin-bottom: 5px;
}

tr:nth-child(even) {
  background: #e8eeef;
}

th, td {
  text-align: left;
  padding: 20px;
  font-weight: 300;
}

tfoot tr {
  background: none;
}

tfoot td {
  padding: 10px 2px;
  font-size: 0.8em;
  font-style: italic;
  color: #8a97a0;
}

    </style>
</head>

<table>
    <caption>Enquiry From INTECH Contact Form</caption>
    <tbody>
      <tr>
        <th scope="row">Name</th>
        <td>{{ $inquiry->name }}</td>
      </tr>
      <tr>
        <th scope="row">Email</th>
        <td><a href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</a></td>
      </tr>
      <tr>
        <th scope="row">Contact Number</th>
        <td>{{ $inquiry->number }}</td>
      </tr>
      <tr>
        <th scope="row">Subject</th>
        <td>{{ $inquiry->subject }}</td>
      </tr>
      <tr>
        <th scope="row">Message</th>
        <td>{{ $inquiry->message }}</td>
      </tr>
    </tbody>
  </table>


</html>