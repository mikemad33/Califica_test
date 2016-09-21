<?php

function VerifyForm(&$values, &$errors)
{
    // Do all necessary form verification
    
    if (strlen($values['name']) < 3)
        $errors['name'] = 'Name too short';
    elseif (strlen($values['name']) > 50)
        $errors['name'] = 'Name too long';
        
    // Needs better checking ;)
    if (!ereg('.*@.*\..{2,4}', $values['email']))
        $errors['email'] = 'Email address invalid';

    if (strlen($values['text']) == 0)
        $errors['text'] = 'Text required';
        
    return (count($errors) == 0);
}

function DisplayForm($values, $errors)
{
    ?>
    <html>
    <head>
        <title>Yadda yadda</title>
        <style>
            TD.error
            {
                color: red;
                font-weight: bold;    
            }
        </style>
    </head>
    <body>
    
    <?php
    if (count($errors) > 0)
        echo "<p>There were some errors in your submitted form, please correct them and try again.</p>";
    ?>
    
    <form action="<?= $_SERVER['../PHP_SELF'] ?>" method="POST">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" size="30" name="name" value="<?= htmlentities($values['name']) ?>"/>
            <td class="error"><?= $errors['name'] ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" size="30" name="email" value="<?= htmlentities($values['email']) ?>"/>
            <td class="error"><?= $errors['email'] ?></td>
        </tr>
        <tr>
            <td valign="top">Text:</td>
            <td>
                <textarea name="text" cols="30" rows="6"><?= htmlentities($values['text']) ?></textarea>
            </td>
            <td class="error"><?= $errors['text'] ?></td>
        </tr>
        <tr><td colspan="2" align="center"><input type="submit" value="Submit"></tr>
    </table>
    </form>
    
    </body>
    </html>
    <?php
}

function ProcessForm($values)
{
    mail('foo@bar.com', 'Form test', $values['text'], "From: \"{$values['name']}\" <{$values['email']}>");
    
    // Replace with actual page or redirect :P
    echo "<html><head><title>Thank you!</title></head><body>Thank you!</body></html>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $formValues = $_POST;
    $formErrors = array();
    
    if (!VerifyForm($formValues, $formErrors))
        DisplayForm($formValues, $formErrors);
    else
        ProcessForm($formValues);
}
else
    DisplayForm(null, null);
?> 