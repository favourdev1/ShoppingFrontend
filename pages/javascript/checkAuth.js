function checkAuth() {
token = getCookie('token')
    if (getCookie('token') === null) {
        console.log('user not logged in ')
        // console.log(getCookie('token'))
        return false
    }
    else {
        console.log(
            'user is logged in '
        )
        return true
    }

    return false;
}


var authStatus = checkAuth();
