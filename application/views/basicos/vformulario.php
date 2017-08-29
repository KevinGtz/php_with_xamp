<html>
<head>
    <title>form</title>
</head>
<body>
    
    <h1>Basic Form</h1>
    <form>
        <!-- Text input -->
        Name:
            <input type='text' name='name'>
        <br>
        <br>
        Last name:
            <input type='text' name='last_name'>
        <br>
        <br>
        <!-- Password input -->
        Password:
            <input type='password' name='pass'>
        <br>
        <br>
        
        <!-- Radio button input -->
        Gender:
            <input type='radio' name='gender' value='male'>Male
            <input type='radio' name='gender' value='female'>Female
            <input type='radio' name='gender' value='other' checked>Other
        
        <br>
        <br>
        <!-- Checkbox input -->
        Transportation way:
            <input type='checkbox' name='transport1' value='subway'>Subway
            <input type='checkbox' name='transport2' value='bus'>Bus
            <input type='checkbox' name='transport3' value='train'>Train
        
        <br>
        <br>
        
        <!-- List -->
        Favorite Color:
            <select name='color'>
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="white">White</option>
                <option value="green">Green</option>
            </select>
        <br>
        <br>
        
        <!-- Text Area -->
        Location:
            <br>
            <textarea name='ocation' rows="10" cols="20">
                
            </textarea>
        <br>
        <br>
        
        <!-- Buttons -->
        Action Button:
            <button type="button" onclick="alert('Emergent window')"> 
                Push
            </button>
            <br>
            <br>
        
            <input type="submit" value="Send">

        
    </form>

</body>
</html>