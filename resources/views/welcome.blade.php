<!doctype html>
<html lang="en">
<head>

    <title>Dog Food Calculator</title>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
</head>
<body>
<div class='container'>
    <img src='images/nutro.png' alt='Dog Food'/>
    <h1>Nutro Dog Food Calculator</h1>

    <form method='GET' action=''>
        <label>Your Pet's Name:
            <input type='text' name='petName' value=''>
        </label>

        <label for='size'>Select Your Pet's Size:</label>
        <select name='size' id='size'>
            <option value=' '>Choose one...</option>
            <option value='0-15'>up to 15 lbs.</option>
            <option value='16-25'>16-25lbs.</option>
            <option value='26-40'>26-40lbs.</option>
            <option value='41-60'>41-60lbs.</option>
            <option value='61-80'>61-80lbs.</option>
            <option value='81-100'>81-100lbs.</option>
            <option value='Over 100'>Over 100lbs.</option>
        </select>

        <label class='age'>Your Pet's Age:</label>
        <input type='hidden' name='submitted' value='1'>
        <ul>
            <li>
                <label><input type='checkbox'
                              name='petAge'
                              value='Puppy'>Puppy</label>
            </li>
            <li>
                <label><input type='checkbox'
                              name='petAge'
                              value='Adult'> Adult</label>
            </li>
            <li>
                <label><input type='checkbox'
                              name='petAge'
                              value='Senior'>Senior</label>
            </li>
        </ul>
        <input type='submit' value='Enter' id='submit'>

    </form>


</div>


</body>
</html>
