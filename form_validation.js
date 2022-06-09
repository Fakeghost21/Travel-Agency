function validate_password(password,asterix_pass)
{
     // VALIDATE PASSWORD
    let textPassword = password.value;


    if(textPassword.length!=0)
    {
        let resultLitereMici = textPassword.match(/[a-z]/g); // result va primi un array cu toate literele mici
        const arrayLitereMici=[];
        for(letters in resultLitereMici) // punem literele mici intr-un array
            {arrayLitereMici.push(letters);}


        let resultLitereMari = textPassword.match(/[A-Z]/g); // result va primi un array cu toate literele mari
        const arrayLitereMari=[];
        for(letters in resultLitereMari) // punem literele mari intr-un array
            {arrayLitereMari.push(letters);}

        let resultCifre = textPassword.match(/[0-9]/g); // result va primi un array cu toate cifrele
        const arrayCifre=[];
        for(letters in resultCifre) // punem cifrele intr-un array
            arrayCifre.push(resultCifre);

        let resultSemnulExclamamrii = textPassword.match(/!/g); // result va primi un array cu semnul exclamarii
        const arraySemn=[];
        for(letters in resultSemnulExclamamrii) // punem ! intr-un array
            arraySemn.push(resultSemnulExclamamrii);


        if( arrayLitereMici.length>0 && arrayLitereMari.length>0 && arrayCifre.length>0 &&
            arraySemn.length==1 && arrayLitereMari.length+arrayLitereMici.length+arrayCifre.length
            +arraySemn.length == textPassword.length)
            {
                // daca avem litere mici, litere mari, cifre si un caracter ! si nu avem alte caractere
            document.getElementById(asterix_pass).style.color = "#51FF63";
            document.getElementById(asterix_pass).style.opacity = 1;
            return true;

        }
        else {
            document.getElementById(asterix_pass).style.color = "red";
            document.getElementById(asterix_pass).style.opacity = 1;
            return false;

        }
    }
    else
        {
        document.getElementById(asterix_pass).style.opacity = 0;
        return false;
    }

}


function validate_name(name,asterix_name)
{
    // VALIDATE NAME
    let textName = name.value;

    if(textName.length!=0)
    {
        let result1 = textName.match(/[a-z0-9]/g); // result va primi un array cu toate literele mici si toate cifrele,
                                          // iar g reprezinta cautarea globala
        const arrayLitereCifre=[];
        for(elements in result1) // punem literele mici si cifrele intr-un array
            {arrayLitereCifre.push(elements);}

        if(arrayLitereCifre.length>0 && arrayLitereCifre.length == textName.length)
        { // daca toate literele sunt litere mici sau exista cifre
            document.getElementById(asterix_name).style.opacity = 1;
            document.getElementById(asterix_name).style.color = "#51FF63";
            return true;

        }
        else
        {
            document.getElementById(asterix_name).style.color = "red";
            document.getElementById(asterix_name).style.opacity = 1;
            return false;
        }
    }
    else
        {
        document.getElementById(asterix_name).style.opacity = 0;
        return false;
    }

}


function validate_date(text,format)
{
    let textDate = text.value;


    if(textDate.length!=0)
    {
        if(/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(textDate)||/^\d{1,2}\/\d{1,2}\/\d{2}$/.test(textDate)
        ||/^\d{1,2}\,\d{1,2}\,\d{4}$/.test(textDate)||/^\d{1,2}\,\d{1,2}\,\d{2}$/.test(textDate))
        {
            // let format =b;
            if(format == "mm/dd/aaaa")
            {

                var parts = textDate.split("/");
                var month = parseInt(parts[0], 10);
                var day = parseInt(parts[1], 10);
                var year = parseInt(parts[2], 10);

                if(year < 1000 || year > 3000 || month == 0 || month > 12)
                {
                    document.getElementById("asterix_data").style.opacity = 1;
                    document.getElementById("asterix_data").style.color = "red";
                    return false;
                }
                else
                {
                    var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];
                    if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
                    monthLength[1] = 29;

                    if(day > 0 && day <= monthLength[month - 1])
                    {
                        document.getElementById("asterix_data").style.opacity = 1;
                        document.getElementById("asterix_data").style.color = "#51FF63";
                        return true;
                    }

                    else
                    {
                        document.getElementById("asterix_data").style.opacity = 1;
                        document.getElementById("asterix_data").style.color = "red";
                        return false;

                    }
                }
            }
            else if(format == "dd/mm/aaaa")
            {

                var parts = textDate.split("/");
                var month = parseInt(parts[1], 10);
                var day = parseInt(parts[0], 10);
                var year = parseInt(parts[2], 10);

                if(year < 1000 || year > 3000 || month == 0 || month > 12)
                {
                    document.getElementById("asterix_data").style.opacity = 1;
                    document.getElementById("asterix_data").style.color = "red";
                    return false;

                }
                else
                {
                    var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];
                    if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
                    monthLength[1] = 29;

                    if(day > 0 && day <= monthLength[month - 1])
                        {
                            document.getElementById("asterix_data").style.opacity = 1;
                        document.getElementById("asterix_data").style.color = "#51FF63";
                        return true;

                        }
                    else
                        {
                            document.getElementById("asterix_data").style.opacity = 1;
                        document.getElementById("asterix_data").style.color = "red";
                        return false;
                        }
                }
            }
            else if(format == "dd/mm/aa")
            {

                var parts = textDate.split("/");
                var month = parseInt(parts[1], 10);
                var day = parseInt(parts[0], 10);
                var year = 2000+parseInt(parts[2], 10);

                if(year < 1000 || year > 3000 || month == 0 || month > 12)
                {
                    document.getElementById("asterix_data").style.opacity = 1;
                    document.getElementById("asterix_data").style.color = "red";
                    return false;
                }
                else
                {
                    var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];
                    if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
                    monthLength[1] = 29;

                    if(day > 0 && day <= monthLength[month - 1])
                        {
                            document.getElementById("asterix_data").style.opacity = 1;
                        document.getElementById("asterix_data").style.color = "#51FF63";
                        return true;
                        }
                    else
                        {
                            document.getElementById("asterix_data").style.opacity = 1;
                        document.getElementById("asterix_data").style.color = "red";
                        return false;
                        }
                }
            }
        }
        else
        {
            document.getElementById("asterix_data").style.opacity = 1;
            document.getElementById("asterix_data").style.color = "red";
            return false;
        }
    }
    else
    {
        document.getElementById("asterix_data").style.opacity = 0;
        return false;
    }
}



function validate_telephone_email(text,asterix_tel_em)
{

    // VALIDATE TELEPHONE
    let telephone = text.value;

    // let telephone =  a;

    if(telephone.length!=0)
    {
        if(/^\(?[+]([4]\d{1})\)?[- ]?(\d{3})[- ]?(\d{3})[- ]?(\d{3})$/.test(telephone))
        {
            document.getElementById(asterix_tel_em).style.color = "#51FF63";
            document.getElementById(asterix_tel_em).style.opacity = 1;
            return true;
        }

        else
            {
                document.getElementById(asterix_tel_em).style.color = "red";
                document.getElementById(asterix_tel_em).style.opacity = 1;
        }

    }
    else
        {
        document.getElementById(asterix_tel_em).style.opacity = 0;
        return false;

    }

    let textEmail = text.value;

    if (textEmail.length != 0) {
        let resultLitere = textEmail.match(/[a-zA-Z]/g); // result va primi un array cu toate literele existente
        const arrayLitere = [];
        for (letters in resultLitere) // punem literele mici si mari intr-un array
        { arrayLitere.push(letters); }

        let resultCifre1 = textEmail.match(/[0-9]/g); // result va primi un array cu toate cifrele
        const arrayCifre1 = [];
        for (letters in resultCifre1) // punem cifrele intr-un array
        { arrayCifre1.push(letters); }

        let resultUnderscore = textEmail.match(/_/g); // result va primi un array cu underscore
        const arrayUnderscore = [];
        for (letters in resultUnderscore) // punem _ intr-un array
        { arrayUnderscore.push(letters); }

        let resultDot = textEmail.match(/[.]/g); // result va primi un array cu punct
        const arrayDot = [];
        for (letters in resultDot) // punem . intr-un array
        { arrayDot.push(letters); }

        let resultArond = textEmail.match(/@/g); // result va primi un array cu @
        const arrayArond = [];
        for (letters in resultArond) // punem @ intr-un array
        { arrayArond.push(letters); }

        if (arrayLitere.length > 0 && arrayCifre1.length > 0 && arrayUnderscore.length > 0 && arrayDot.length > 0 &&
            arrayArond.length == 1 && (arrayLitere.length + arrayCifre1.length + arrayUnderscore.length + arrayDot.length
                + arrayArond.length == textEmail.length)) { // daca avem litere, cifre, _, . si un caracter @
            document.getElementById(asterix_tel_em).style.color = "#51FF63";
            document.getElementById(asterix_tel_em).style.opacity = 1;
            return true;

        }
        else {
            document.getElementById(asterix_tel_em).style.color = "red";
            document.getElementById(asterix_tel_em).style.opacity = 1;
            return false;

        }
        //  document.getElementById("dst").style.borderColor = "red";

        // document.getElementById("dat").style.borderColor = "#51FF63";
    }
    else {
        document.getElementById(asterix_tel_em).style.opacity = 0;
        return false;
    }
}
