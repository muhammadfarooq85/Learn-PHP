<?php
// Filesystem

// checking file exists or not
if (file_exists("../Date/index.php")) {
    echo "File hy!";
} else {
    echo "File Nahi hy!";
}
;

// chk if the givern path is regulr file or not
if (is_file("../Date/index.php")) {
    echo "it is a file!";
}
;

// chk if the path is directory or not
if (is_dir("../Date/index.php")) {
    echo "it is a directory!";
}
;

// chk if a file is readable or not
if (is_readable("../Date/index.php")) {
    echo "Yes, it is a directory!";
}
;

// chk if a file is writeable or not
if (is_writeable("../Date/index.php")) {
    echo "Yes, it is writeable!";
}
;

// reading the content of file
if (file_get_contents("../Date/index.php")) {
    echo "Yes, it is writeable!";
}

// deleting the file
if (unlink("../Date/index.php")) {
    echo "file is deleted!";
} else {
    echo "Error ocurred in deleting the file!";
};

// renaimg the file
if (rename('oldname.txt', 'newname.txt')) {
    echo 'File renamed or moved.';
} else {
    echo 'Error occurred in renaming or moving file.';
};

// mkdir(), rdir(), filesize(), filetype(), 
