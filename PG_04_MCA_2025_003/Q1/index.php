<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" id="form">
        <label>Name : </label>
        <input type="text" name="name" placeholder="Enter Name"><br><br>
        <label>Roll no : </label>
        <input type="text" name="roll_number" placeholder="Enter Roll Number"><br><br>
        <label>Subject1 : </label>
        <input type="number" name="subject1" placeholder="Enter Marks for Subject 1"><br><br>
        <label>Subject2 : </label>
        <input type="number" name="subject2" placeholder="Enter Marks for Subject 2"><br><br>
        <label>Subject3 : </label>
        <input type="number" name="subject3" placeholder="Enter Marks for Subject 3"><br><br>
        <input type="submit" name="submit" value="Submit"><br><br>
    </form>
    <div id="res"></div> 
</body>
<script>
    const form = document.getElementById('form');
    const res = document.getElementById('res');
    
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(form);
        const response = await fetch('backend.php', {
            method: 'POST',
            body: formData
        });
        const result = await response.text();
        res.innerHTML = result;
    });
</script>
</html>