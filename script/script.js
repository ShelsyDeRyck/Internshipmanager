function generatePass() {
    let pass = '';
    let str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' +
        'abcdefghijklmnopqrstuvwxyz0123456789@#$';
 
    for (let i = 1; i <= 8; i++) {
        let char = Math.floor(Math.random()
            * str.length + 1);
 
        pass += str.charAt(char)
    }
 
    return pass;
}
function resetPass() {
    document.getElementById('teacherPass').value = generatePass();
}

// document.addEventListener('DOMContentLoaded', function() {
//     document.getElementById('teacherPass').value = generatePass();
// });
