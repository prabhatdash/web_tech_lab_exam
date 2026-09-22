
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" id="form">
        <label>Name : </label>
        <input type="text" name="name" placeholder="Enter Name"><br><br>
        <label>English : </label>
        <input type="number" name="english" placeholder="Enter Marks for English"><br><br>
        <label>Mathematics : </label>
        <input type="number" name="mathematics" placeholder="Enter Marks for Mathematics"><br><br>
        <label>Computer Science : </label>
        <input type="number" name="computer_science" placeholder="Enter Marks for Computer Science"><br><br>
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