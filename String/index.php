    <?php 
    $userEmail = "farooq@gnal.com";
    $userPassword = "123vgf";
    echo "{$userEmail} . {$userPassword}";
    // In single quotes you cannot embed strings.
    // But in double quotes you can do this.

    // accessinh characters in string
    $userName = "Muhammad Farooq!";
    echo $userName[-1];
    $userName[-1] = "c";
    echo $userName[-1];

    // herodoc
    // It is similiar to the double quotes but here there is no need to escape the characters.
    // Basic Syntax
    // str = <<<IDENTIFIER IDENTIFIER;

    
    $str = <<<IDENTIFIER
    place a string here
    it can span multiple lines
    and include single quote ' and double quotes "
    IDENTIFIER;
?>