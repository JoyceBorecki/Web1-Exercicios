function procuraSubstring(string, substring) {
    for (let i = 0; i < string.length; i++) {
        let j = 0;
        while (j < substring.length && string[i + j] == substring[j]) {
            j++;
        }
        if (j == substring.length) {
            return i;
        }
    }
    return -1;
}

let str = "Aula de web1"

console.log("String: ", str);
console.log("Busca 'web1': ", procuraSubstring(str,"web1"))
console.log("Busca 'web2': ", procuraSubstring(str,"web2"))