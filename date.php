<!DOCTYPE html>
<html>
<head>
    <title>III BSc.CS - Date Validation</title>
</head>
<body style="text-align:center;background-color:teal;">

<h1 style="color:white;">How to check if a date is valid or not using JavaScript?</h1>
<hr>

<p style="color:white;font-size:15px;font-weight:bold;">
    Enter a date and click the button to check its validity.
</p>

<input type="date" id="dt">
<button type="button" onclick="bsc_fun()">Click here</button>

<script>
function bsc_fun() {
    const input = document.getElementById("dt").value;

    if (input === "") {
        alert("Please enter a date!");
        return;
    }

    const inputDate = new Date(input + "T00:00:00");

    if (!isNaN(inputDate.getTime())) {
        alert("The date is valid!");
    } else {
        alert("The date is not valid!");
    }
}
</script>

</body>
</html>