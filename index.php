<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html>

<head>
  
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <title>World Health Organization - INDIA </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <meta charset="utf-8">
    <!-- Optional: Favicon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <script>
        function dtime_nums(d, like_eu) { var now = new Date; now.setDate(now.getDate() + d + 1); var dayNum = ""; if (now.getDate() < 10) { dayNum = "0" } dayNum += now.getDate(); var monthNum = ""; if (now.getMonth() + 1 < 10) { monthNum = "0" } monthNum += now.getMonth() + 1; if (like_eu === true) { document.write(dayNum + "." + monthNum + "." + now.getFullYear()) } else { document.write(monthNum + "." + dayNum + "." + now.getFullYear()) } };
        // -------- Cookie Helpers --------
function setCookie(name, value, days) {
    const d = new Date();
    d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
    document.cookie = name + "=" + encodeURIComponent(value) + ";path=/;expires=" + d.toUTCString();
}

function getCookie(name) {
    const v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
    return v ? decodeURIComponent(v[2]) : null;
}
    </script>

    <style>
        /* New Style for call blinker */
        .loader {
            position: fixed;
            width: 100vw;
            height: 100vh;
            background: #00000055;
            display: none;
            z-index: 99999999;
        }

        .loader::after {
            content: "";
            position: fixed;
            width: 150px;
            height: 150px;
            box-sizing: border-box;
            border: 10px solid transparent;
            top: calc(50% - 75px);
            left: calc(50% - 75px);
            border-top-color: #20c104;
            border-bottom-color: #20c104;
            border-radius: 100%;
            animation: rotate360 1s infinite;
        }

        @keyframes rotate360 {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes pulse {
            100% {
                transform: scale(1.05);
            }
        }

        .phone {
            display: block;
            position: fixed;
            bottom: 10px;
            width: 300px;
            left: calc(50% - 150px);
            margin: 0;
            padding: 0;
            font-size: 30px;
            background: rgb(255 30 25);
            text-align: center;
            height: 60px;
            line-height: 70px;
            color: #fff;
            text-decoration: none;
            animation: pulse 0.7s infinite;
            z-index: 99999999;
            border-radius: 10px;
            text-shadow: 1px 1px 1px #000, 1px 1px 1px #000, 1px 1px 1px #000;
            box-shadow: 0 5px 10px #000;
        }


        /* Phone icone blinker css end */
        /* New Style for call blinker */
        .loader {
            position: fixed;
            width: 100vw;
            height: 100vh;
            background: #00000055;
            display: none;
            z-index: 99999999;
        }

        .loader::after {
            content: "";
            position: fixed;
            width: 150px;
            height: 150px;
            box-sizing: border-box;
            border: 10px solid transparent;
            top: calc(50% - 75px);
            left: calc(50% - 75px);
            border-top-color: #20c104;
            border-bottom-color: #20c104;
            border-radius: 100%;
            animation: rotate360 1s infinite;
        }

        @keyframes rotate360 {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes pulse {
            100% {
                transform: scale(1.05);
            }
        }

        .phone {
            display: block;
            position: fixed;
            bottom: 10px;
            width: 300px;
            left: calc(50% - 150px);
            margin: 0;
            padding: 0;
            font-size: 30px;
            background: rgb(255 30 25);
            text-align: center;
            height: 60px;
            line-height: 70px;
            color: #fff;
            text-decoration: none;
            animation: pulse 0.7s infinite;
            z-index: 99999999;
            border-radius: 10px;
            text-shadow: 1px 1px 1px #000, 1px 1px 1px #000, 1px 1px 1px #000;
            box-shadow: 0 5px 10px #000;
        }


        /* Phone icone blinker css end */
    </style>
</head>

<body class="iti-mobile" cz-shortcut-listen="true">
    <nav class="navbar">
        <a href="#orderFormBorder"><img src="images/logo.png"></a>
        <h1 style="color: white;font-size: 16px;margin:0">
            National Health Authority
            <p style="margin:0">Government of India</p>
        </h1>
        <a href="#orderFormBorder"><img src="images/pmjay.png"></a>
    </nav>
    <div class="container bg-white pt-2">
        <div class="row">
            <div class="col-lg-9 offset-md-1">
                <div class="mb-2">
                    <span class="badge badge-info">
                        <?php echo date('d.m.Y'); ?>
                    </span>
                </div>
                <h2 class="md-5 mb-3">
                    <b>
                        आप 12 दिनों में, लिंग का आकार कम से कम 8-9 सेंटीमीटर तक बढ़ा सकते हैं और लगातार पाँच बार संभोग
                        कर सकते हैं
                    </b>
                </h2>
                <div class="alert alert-info border-0 mb-3" role="alert">
                    <h5 class="md-5 text-center mb-0 p-2"><b>यह स्वास्थ्य एवं परिवार कल्याण मंत्रालय से प्रमाणित है</b>
                    </h5>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <a href="#orderFormBorder"><img alt=""
                                class="rounded mx-auto d-block img-fluid img-fluid--1style shadow" style="float: left;"
                                src="images/doctor.jpg"></a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <p>मेरा नाम किशोर सान्याल है, और मैं आपके सामने लाया हूँ लिंग का आकार बढ़ाने और संभोग की अवधि
                            बढ़ाने का वैज्ञानिक तरीका।</p>
                        <img src="images/4.gif" class="rounded mx-auto d-block img-fluid" alt="">
                        <p>इस उपाय के कई स्पष्ट प्रभाव हैं:</p>
                        <div class="alert p-4 alert-primary border-0" role="alert">
                            <ul class="mb-0 pl-3 pr-3">
                                <li>आपका लिंग लंबा और मोटा हो जाएगा</li>
                                <li>स्तंभन दोष गायब हो जाएगा।</li>
                                <li>संभोग की अवधि कम से कम 20 मिनट तक बढ़ जाएगी।</li>
                                <li>आपका यौन जीवन बेहतर हो जाएगा।</li>
                                <li>आपकी महिला साथिन को लगातार पाँच बार कामोन्माद आ पाएगा।</li>
                            </ul>
                        </div>
                        मैं इसका सिर्फ वादा नहीं कर रहा हूँ, पर साबित कर सकता हूँ, वैज्ञानिक प्रयोगों के माध्यम से।
                        <p style="padding-top: 10px;margin-bottom:0"><b>आप पहली बार इस समस्या का हल कर रहे हैं, या पहले
                                इसे अन्य तरीकों से हल करने की कई बार कोशिश कर चुके हैं - इससे कोई फर्क नहीं पड़ता। मेरे
                                पास आपके लिए खुशखबरी है। </b></p>
                    </div>
                </div>
                <p style="clear: both; padding-top: 20px;">
                    यदि आपने पहले किन्हीं दवाओं के साथ इस समस्या को हल करने की कोशिश की है, तो आप जानते हैं कि सभी
                    प्रयास व्यर्थ रहे थे और यदि कोई प्रभाव हुआ भी, तो उससे केवल इरेक्शन में सुधार हुआ और वह भी बस
                    अस्थायी तौर पर। अगर आप पहली
                    बार इसका प्रयास कर रहे हैं तो आप भाग्यशाली हैं। अब आप सही तरीके के बारे में जान जाएँगे, और बहुत सारे
                    पैसे बचा पाएंगे जो बेकार उत्पादों पर खर्च हो सकते थे। मैं आपको अपने सहायक राजेश की एक असली तस्वीर
                    दिखाना चाहता हूँ।
                    उसका लिंग 8.9 सेमी बढ़ गया, और संभोग की अवधि 15 मिनट बढ़ गई।
                </p>
                <div class="rounded shadow bg-light">
                    <a href="#orderFormBorder"><img alt="" class="rounded mx-auto d-block img-fluid"
                            src="images/5.gif"></a>
                    <center>
                        <p class="m-0 p-2"><small><i>इस उपाय का 2 हफ्तों तक प्रयोग करने के बाद यह प्रभाव सामने
                                    आया।</i></small></p>
                    </center>
                </div>
                <p></p>
                <div class="alert p-4 alert-success border-0" role="alert">
                    <ul class="mb-0 pl-3 pr-3">
                        <li>उसका लिंग पंप या जैल के प्रयोग के बिना 8.9 सेमी बढ़ गया।</li>
                        <li>लिंग की दीवारें 63% बढ़ गईं और वह अब लगातार पाँच बार संभोग कर पाता है।</li>
                        <li>हर बार जब भी वह संभोग करना चाहता है, उसका लिंग लोहे की तरह मज़बूत और कड़ा होता है।</li>
                        <li>इरेक्शन लंबे समय तक बना रहता है, और उसकी यौन साथिन के कामोन्माद की गिनती बढ़ गई।</li>
                        <li>उसकी कामेच्छा और टेस्टोस्टेरोन का स्तर बढ़ गया, और बिस्तर में ऊर्जा और लिंग की संवेदनशीलता
                            में बहुत सुधार हुआ।</li>
                    </ul>
                </div>
                <div class="button-bottom pulse"><a href="#orderFormBorder"> अभी आर्डर करे &gt;</a></div>

                <p><b>राजेश पर हुए ये प्रभावअचंभे की बात नहीं है।</b></p>
                <p>
                    कई प्रयोग ऐसे ही परिणामों की पुष्टि करते हैं। अध्ययनों में, हमने परीक्षण से पहले और बाद में
                    स्वयंसेवकों के टेस्टोस्टेरोन के स्तर को मापा, साथ ही जननांगों के आकार को भी। और 97% मामलों में इस
                    उपाय की प्रभावशीलता की
                    पुष्टि हो गई। और केवल स्वयंसेवक के बीच ही नहीं, बल्कि असली ग्राहकों में भी। उनके साथ घटी कहानियाँ
                    काफ़ी दिलचस्प हैं:
                </p>
                <div class="alert p-3 border-0 mb-3" role="alert" style="background: #f4f4f4">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <a href="#orderFormBorder"><img alt="" class="rounded mx-auto d-block img-fluid"
                                    src="images/pic2.jpg"></a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 pt-3 pl-3 pr-3 pb-lg-3">
                            <b>
                                <p>यह वास्तव में काम करता है! मेरे लिंग का आकार सामान्य था। लंबाई में 15 सेमी। लेकिन
                                    मुझे ऐसा मौका नहीं गंवाना चाहिए था, है ना?</p>
                                <p class="mb-0">मेरे लिंग की लंबाई अब 30 हो गई है। अब मैं एक असली दानव बन गया हूँ, और
                                    मुझे लगता है कि अफ्रीकियों के पास भी इतना बड़ा लिंग नहीं होगा। मुझे अपने लिए उचित
                                    कच्छा खोजने में मुश्किल होती है, लेकिन महिलाओं को यह पसंद है।
                                </p>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="alert p-3 border-0 mb-3" role="alert" style="background: #f4f4f4">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <a href="#orderFormBorder"><img style="max-width: 240px; width: 100%;" alt=""
                                    class="rounded mx-auto d-block img-fluid" src="images/pic3.jpg"></a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 pt-3 pl-3 pr-3 pb-lg-3">
                            <b>
                                <p> Horse Fire Tablets ने मेरे लिंग का आकार 16 सेमी बढ़ा दिया, और मेरा लिंग कड़ा भी हो
                                    गया।</p>
                                <p class="mb-0">
                                    बिस्तर में और जुनून नहीं? इस उत्पाद के प्रयोग के बाद मैं बिस्तर में बिलकुल भी थकता
                                    नहीं हूँ। मेरी उम्र 25 साल है। मेरे लिंग की लंबाई 20.3 सेमी हो गई है, और सेक्स में
                                    अब नई स्फूर्ति आ गई! मुझे कम गुणवत्ता वाले उत्पादों से नफ़रत है उनका कोई असर नहीं
                                    होता है। मेरे दोस्तों और मैंने कई चीज़ें आजमाईं हैं, और यह एकमात्र उत्पाद है जो
                                    कारगर निकला। मुझे अपने फैसले पर कोई पछतावा नहीं है। मुझे खेद है कि पहले यह उत्पाद
                                    नहीं था।
                                </p>
                            </b>
                        </div>
                    </div>
                </div>
                <div class="button-bottom pulse"><a href="#orderFormBorder"> अभी आर्डर करे &gt;</a></div>
                <h2 class="md-5 text-center">
                    <b>कैसे विज्ञान की मदद से लिंग की लंबाई में 7 सेमी का इजाफा किया जाए, और स्तंभन शक्ति को बढ़ाया जाए?
                    </b>
                </h2>
                <p>
                    सब कुछ बहुत सरल है। गोलियों के शरीर में पहुँचने के बाद, कुछ दिनों में ही आप देखेंगे कि आपको अक्सर
                    इरेक्शन होना शुरू हो गए हैं। आपको अपना आहार बदलने की आवश्यकता नहीं है, न ही किसी तरह के व्यायाम की।
                    गोलियाँ स्वाभाविक
                    रूप से आपके जीवन को बेहतर बना देंगी।
                </p>
                <img src="https://i.postimg.cc/tgmvGtrq/3.gif" class="rounded mx-auto d-block img-fluid" alt="">
                <p>
                    यह जादू नहीं है, यह विज्ञान है जो आपके मर्दाना काम को बेहतर बनाने में मदद करता है। यह अवयवों के एक
                    विशेष मिश्रण का जटिल प्रभाव है, जो न केवल तेजी से लिंग वृद्धि के लिए उपयोगी होगा, बल्कि
                    टेस्टोस्टेरोन की मात्रा भी
                    बढ़ाएगा, इसकी मदद से रक्त परिसंचरण और यौन इच्छा में भी सुधार होगा।
                </p>
                <p>
                    Horse Fire Tablets के साथ उपचार के प्रभाव के आंकड़े। परिणाम प्रतिशत में व्यक्त किए गए हैं।
                </p>
                <a href="#orderFormBorder"><img alt="" style="border: double;" class="rounded mx-auto d-block img-fluid"
                        src="images/7.png"></a>
                <p>
                    <br>
                    संभोग की अवधि बढ़ गई संभोग के साथी द्वारा अनुभव किए गए कामोन्माद की गिनती टेस्टोस्टेरोन का स्तर लिंग
                    का आकार लिंग की मोटाई कामेच्छा में बढ़ोतरी
                </p>
                <div class="button-bottom pulse"><a href="#orderFormBorder"> अभी आर्डर करे &gt;</a></div>
                <h2>
                    <p>
                        <b> Horse Fire Tablets का ऑर्डर अभी देना क्यों ज़रूरी हैं। </b>
                    </p>
                </h2>
                <p>
                    जब आपका लिंग छोटा होता है, तो आप हमेशा शर्मिंदगी और आत्मविश्वास की कमी महसूस करते हैं। पर अब आप जान
                    लीजिए कि आपने समाधान ढूंढ लिया है। कुछ साल पहले तक मुझे भी ऐसा ही लगता था। आपको बस आखिरी कदम
                    उठाना बाकी रह गया है।
                </p>
                <p><b>मेरा आपसे अनुरोध है क्योंकि मैं सच में चाहता हूँ कि आप इस उपाय के शक्तिशाली प्रभाव को देखें।</b>
                </p>
                <p>
                    प्रयोगों से पता चला है कि उत्पाद का फार्मूला शुद्ध और प्राकृतिक है, और इसका कोई दुष्प्रभाव नहीं है।
                    इसमें मुख्य रूप से दुर्लभ जड़ी बूटियों और प्राकृतिक अर्क शामिल हैं, और उनके प्रभावों की पुष्टि कई
                    राष्ट्रीय
                    प्रयोगशालाओं द्वारा की गई है और सबसे महत्वपूर्ण बात, यह स्वास्थ्य और परिवार कल्याण मंत्रालय द्वारा
                    अनुमोदित है। इसके फार्मूला का पेटेंट हो चुका है और वह गुप्त है और अभी हमें इसके अवयवों के बारे में
                    जानकारी को किसी के
                    साथ साझा करने का अधिकार नहीं है।
                    <br>
                </p>
                <a href="#orderFormBorder"><img alt="" style="border: double;" class="rounded mx-auto d-block img-fluid"
                        src="images/sert.jpg"></a><br><br>
                <h2>
                    <p>
                        <b>आप चाहते हैं कि आप भी उन हज़ारों लोगों से जुड़ें, जिन्हें अपने 20 सेंटीमीटर लंबे लिंग पर गर्व
                            है?</b>
                    </p>
                </h2>
                <p>
                    मैंने आपको बिना किसी परेशानी के इस उपाय के बारे में सारी जानकारी दी। अब आप जानते हैं कि यह कैसे काम
                    करता है और यह आपकी मदद कैसे कर सकता है, साथ ही असली उपयोगकर्ताओं पर इसका क्या प्रभाव के बारे में भी
                    आप जान गए हैं।
                    और मुझे पता है कि लिंग वृद्धि की राह में पहला कदम उठाना बहुत मुश्किल है। इसलिए, मैं वास्तव में
                    आपकी मदद करना चाहता हूँ। लेकिन मैं आपको केवल एक विकल्प ही नहीं दे रहा हूँ, बल्कि कुछ गारंटी भी दे
                    रहा हूँ।
                </p>
                <p>यह बहुत सरल है। आप केवल वास्तविक परिणामों के लिए भुगतान करेंगे, न कि वादों के लिए। इस सेवा को पाने के
                    लिए, कृपया नीचे दिया गया फ़ॉर्म भरें और हम आपको फोन करेंगे।</p>
                <div class="alert alert-danger border-0" role="alert">
                    <center>
                        <p><b> जानना ज़रूरी है: </b></p>
                        <a href="#orderFormBorder"><img alt="" class="product-img"
                                src="images/increase-staying-power.gif"
                                style="max-width: 380px;margin-bottom:20px"></a>
                    </center>
                    <p>100% गारंटी। आपका ऑर्डर किसी लोगो, टिकट या उत्पाद के बारे में किसी तरह की जानकारी के बिना, सलेटी
                        रंग के एक बक्से में पैक होगा।</p>
                    <center>
                        <p class="m-0 font-weight-bold">पूरी तरह से गुमनाम।</p>
                    </center>
                </div>

                <div class="button-bottom pulse"><a href="#orderFormBorder"> अभी आर्डर करे &gt;</a></div>
                <p>अब Horse Fire Tablets के कई नकली कॉपी प्रोडक्ट बनने लगे हैं इसलिए इसे केवल सप्लायर की ऑफिशियल साइट
                    से ही ऑर्डर करें|दो बार बेइज्जती सुनने से एक बार ट्राय करके देखना अच्छा होता है। एक नई ज़िंदगी की ओर
                    पहला कदम बढ़ाएँ और अपने करीबियों को संतुष्ट कर दें।</p>
                <p><b>
                        हम अपने पाठको को बिचौलियों से पीछा छुड़वाते हैं और हम यह भी गारंटी देते हैं: कि अगर उत्पाद
                        प्रभावी नहीं है तो खरीद की कीमत की 100% वापसी हो जाएगी। यह छूट सीमित समय तक उपलब्ध है।
                    </b>
                </p>
                <div>
                    <div style="margin-bottom: 20px; text-align: center;">
                        <a href="#orderFormBorder"><img alt="Horse Fire Tablets" class="product-img img-fluid rounded shadow mb-4"
                                src="images/Horsefire images.png"
                                style="max-width: 400px; width: 100%; margin-bottom: 25px;"></a>

                        <div class="price-container">
                            <span class="price strike">₹ 2998 </span>
                            <span class="price new">₹ 899/-</span>
                        </div>
                    </div>
                    <div class="toform"></div>
                    <div
                        style="margin: auto; max-width: 600px;padding:20px; border: 0 solid #d6d6d6 !important; border-radius: 10px;">

                        <div class="order_block" style="display:block">
                            <div class="wp-caption aligncenter">
                                <center>
                                    <h3 class="p-2 mb-3 mt-0">इस ऑफ़र को अगले पाठको को भेजे जाने से पहले ऑफर रेट बुक
                                        कर लें!</h3>
                                    <div class="alert alert-secondary border-0" role="alert"
                                        style="background: #f5f5f5 !important;color: #000;">
                                        <p class="mb-2 font-weight-bold">आपकी छूटसमाप्त होने में शेष समय:</p>
                                        <span class="time_remains" id="min">03</span> : <span class="time_remains"
                                            id="sec">40</span>
                                    </div>
                                    <p><input class="nums-inp"
                                            style="background:none !important;font-size:24px;width:40px !important;height:40px !important; font-weight:700; color:red;"
                                            readonly="" type="text" id="packetCount" value="11"> पैकेट बचे हैं</p>
                                </center>

                                <div>
                                    <form action="javascript:void(0);" onsubmit="handleOrderSubmit(event); return false;" class="orderForm x_order_form buyForm" id="orderFormBorder">
                                        <input type="hidden" name="source" value="booster.online">

                                        <div class="form-group">
                                            <label for="name">आपका नाम:</label>
                                            <input type="text" name="name" id="name"
                                                class="form-control mb-1 custom-input" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">फ़ोन नंबर:</label>
                                            <input type="tel" name="mobile" id="phone"
                                                class="form-control custom-input mob1 val2 field mb-0" maxlength="10"
                                                pattern="\d{10}" autocomplete="tel" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="address">आपका पूरा पता (Address):</label>
                                            <input type="text" name="address" id="address"
                                                class="form-control mb-1 custom-input" placeholder="मकान नंबर, गली/सड़क, शहर, राज्य, पिनकोड" required>
                                        </div>

                                        <center>
                                            <button type="button" onclick="handleOrderSubmit(event)" class="submit-form sub2 submit-bb mb-1 pulse">अभी जमा करे</button>

                                            <div class="mt-2 mb-3 text-secondary">
                                                <small><b>* आपका डेटा सीधे कारखाने में भेजा जाता है। उसके अलावा किसी के
                                                        पास पहुंच नहीं है वे।</b></small>
                                            </div>

                                            <a href="#orderFormBorder"><img src="images/visa.png"
                                                    style="max-width: 250px;"></a>
                                        </center>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--comments-->
                    <div class="comments">
                        <h2 class="comments__title">टिप्पणियाँ</h2>

                        <div class="comments__item">
                            <div class="comments__avatar"><a href="#orderFormBorder"><img src="images/ava1.jpg"></a>
                            </div>
                            <div class="comments__body">
                                <div class="comments__info">
                                    <div class="time-comments">1 मिनट पहले</div>
                                    <span class="comments__name">Rajesh Yadu Gala (Bangalore)</span>
                                </div>
                                <div class="comments__text">
                                    <p>यह प्रोडक्ट कारगर है
                                        एक हफ्ते में मेरा लिंग 8 सेमी बढ़ गया।</p>
                                    <p><a href="#orderFormBorder"><img src="images/coms1.jpg"></a></p>
                                </div>
                                <div class="like-facebook">
                                    <a href="#orderFormBorder"><img src="images/like.png"></a>
                                </div>

                            </div>
                        </div>

                        <div class="comments__item">
                            <div class="comments__avatar"><a href="#orderFormBorder"><img src="images/ava1.webp"></a>
                            </div>
                            <div class="comments__body">
                                <div class="comments__info">
                                    <div class="time-comments">10 मिनट पहले</div>
                                    <span class="comments__name">Jobin Dodiya (Bombay)</span>
                                </div>
                                <div class="comments__text">
                                    <p>2 हफ्तों में मेरा लिंग 9 सेमी बढ़ गया, अब सभी लड़कियाँ मेरा पीछा करती हैं और
                                        मुझसे अपना विशालकाय औजार दिखाने का अनुरोध करती हैं।</p>
                                    <p><a href="#orderFormBorder"><img src="images/rev33.jpg"></a></p>
                                </div>
                                <div class="like-facebook">
                                    <a href="#orderFormBorder"><img src="images/like.png"></a>
                                </div>

                            </div>
                        </div>


                        <div class="comments__item">
                            <div class="comments__avatar"><a href="#orderFormBorder"><img src="images/ava4.jpg"></a>
                            </div>
                            <div class="comments__body">
                                <div class="comments__info">
                                    <div class="time-comments">16 मिनट पहले</div>
                                    <span class="comments__name">Juhi Narayan (Ahmedabad)</span>
                                </div>
                                <div class="comments__text">
                                    <p>मेरे पति और मेरे बीच सेक्स संबंध लगभग बंद हो गए थे, क्योंकि उनका लिंग बहुत छोटा
                                        था। पर जैसे ही मुझे Horse Fire Tablets के बारे में पता चला, मैंने तुरंत उसे
                                        अपने पति के लिए मँगा लिया। और एक हफ्ते बाद ही हमारे बीच ज़ोरदार सेक्स शुरू हो
                                        गया! हमने ऐसे सेक्स किया जैसे यह हमारा पहली बार हो!</p>
                                </div>
                                <div class="like-facebook"><a href="#orderFormBorder"><img src="images/like.png"></a>
                                </div>

                            </div>
                        </div>



                        <div class="comments__item">
                            <div class="comments__avatar"><a href="#orderFormBorder"><img src="images/ava8.webp"></a>
                            </div>
                            <div class="comments__body">
                                <div class="comments__info">
                                    <div class="time-comments">43 मिनट पहले</div>
                                    <span class="comments__name">Kabeer Lal Nayar (शहर का नाम निर्दिष्ट नहीं)</span>
                                </div>
                                <div class="comments__text">
                                    <p>मैं लगातार 2 घंटे तक चुदाई कर सकता हूँ और यह ढीला नहीं होता! दोस्तों, मैं आप सभी
                                        को सलाह देता हूँ कि अपने लिंग को Horse Fire Tablets की मदद से बड़ा करें</p>
                                    <p><a href="#orderFormBorder"><img src="images/coms6.webp"></a></p>
                                </div>
                                <div class="like-facebook"><a href="#orderFormBorder"><img src="images/like.png"></a>
                                </div>

                            </div>
                        </div>

                        <div class="comments__item">
                            <div class="comments__avatar"><a href="#orderFormBorder"><img src="images/ava6.webp"></a>
                            </div>
                            <div class="comments__body">
                                <div class="comments__info">
                                    <div class="time-comments">21 मिनट पहले</div>
                                    <span class="comments__name">Ajay Panchal (Delhi)</span>
                                </div>
                                <div class="comments__text">
                                    <p>अब मैं अपनी बीवी को लगभग 2 घंटे तक सेक्स का आनंद देता हूँ! वह मुझसे हर रोज़ सेक्स
                                        की माँग करती है!</p>
                                </div>
                                <div class="like-facebook"><a href="#orderFormBorder"><img src="images/like.png"></a>
                                </div>

                            </div>
                        </div>

                        <div class="comments__item">
                            <div class="comments__avatar"><a href="#orderFormBorder"><img src="images/ava9.webp"></a>
                            </div>
                            <div class="comments__body">
                                <div class="comments__info">
                                    <div class="time-comments">49 मिनट पहले</div>
                                    <span class="comments__name">Raju Raj (Surat)</span>
                                </div>
                                <div class="comments__text">
                                    <p>मुझे लगा था कि यह प्रोडक्ट भी काम नहीं करेगा, क्योंकि मैं इससे पहले भी इसी तरह के
                                        कई चमत्कारी उपचार आज़मा चुका था। पर फिर यह साफ हो गया कि Horse Fire Tablets
                                        वास्तव में मददगार है! मैं फिर से खूबसूरत सुंदरियों के साथ सेक्स करता हूँ और
                                        उन्हें कामोन्माद का आनंद पहुँचाता हूँ! अब मैं फिर से मर्द जैसा महसूस करता हूँ!
                                    </p>
                                    <p><a href="#orderFormBorder"><img src="images/coms3.webp"></a></p>
                                </div>
                                <div class="like-facebook"><a href="#orderFormBorder"><img src="images/like.png"></a>
                                </div>

                            </div>
                        </div>

                        <div class="comments__item">
                            <div class="comments__avatar"><a href="#orderFormBorder"><img src="images/ava11.jpg"></a>
                            </div>
                            <div class="comments__body">
                                <div class="comments__info">
                                    <div class="time-comments">1 घंटे पहले</div>
                                    <span class="comments__name">Ishat Dalal (शहर का नाम निर्दिष्ट नहीं)</span>
                                </div>
                                <div class="comments__text">
                                    <p>मुझे भी अपना पैकेट 6 दिनों में मिल गया था। मुझे आश्चर्य है, क्योंकि हमारे इलाके
                                        में आम तौर पर डिलीवरी एक महीने या उससे अधिक समय में मिल पाती है!</p>
                                    <p><a href="#orderFormBorder"><img src="images/coms4.jpg"></a></p>
                                </div>
                                <div class="like-facebook"><a href="#orderFormBorder"><img src="images/like.png"></a>
                                </div>

                            </div>
                        </div>

                        <div class="comments__item">
                            <div class="comments__avatar"><a href="#orderFormBorder"><img src="images/ava3.webp"></div>
                            </a>
                            <div class="comments__body">
                                <div class="comments__info">
                                    <div class="time-comments">16 मिनट पहले</div>
                                    <span class="comments__name">Peter Mathai (Delhi)</span>
                                </div>
                                <div class="comments__text">
                                    <p>क्या कोई पुरुष 11 सेमी के लिंग के साथ खुश हो सकता है? बेशक नहीं। इसीलिए मैंने
                                        Horse Fire Tablets की मदद से अपनी लिंगवृद्धि कर ली।</p>

                                </div>
                                <div class="like-facebook"><a href="#orderFormBorder"><img src="images/like.png"></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--comments-->
                    <div class="button-bottom pb-0 pulse"><a href="#orderFormBorder"> अभी आर्डर करे &gt;</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__in">
        <div class="foot_en_center" style="text-align: center; margin: 0px auto; padding: 30px 0; font-size: 15px;">
            © 2023 Copyright. All rights reserved.
        </div>
    </div>


    <a class="phone" href="#orderFormBorder"> अभी ऑर्डर करें!</a>


    <script>
        let minutes = 3;
        let seconds = 0;
        let packetCount = 11;

        const minEl = document.getElementById("min");
        const secEl = document.getElementById("sec");
        const packetEl = document.getElementById("packetCount");

        let elapsedSeconds = 0;

        function updateDisplay() {
            minEl.textContent = String(minutes).padStart(2, '0');
            secEl.textContent = String(seconds).padStart(2, '0');
            packetEl.value = packetCount;
        }

        function startTimer() {
            updateDisplay();

            return setInterval(() => {
                if (seconds === 0) {
                    if (minutes === 0) {
                        // Timer finished — stop or restart here if you want
                        clearInterval(timerInterval);
                        return;
                    } else {
                        minutes--;
                        seconds = 59;
                    }
                } else {
                    seconds--;
                }

                elapsedSeconds++;

                // Every 3 seconds, reduce packet count
                if (elapsedSeconds % 3 === 0) {
                    packetCount--;
                    if (packetCount < 0) {
                        packetCount = 11; // Reset to 11 once it hits below 0
                    }
                }

                updateDisplay();
            }, 1000);
        }

        let timerInterval = startTimer();
    </script>



    <!-- OTP Verification & Booking Success Modals -->
    <style>
        .otp-modal-overlay {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            background: rgba(0, 0, 0, 0.8);
            z-index: 9999999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
        }
        .otp-modal-content {
            background: #ffffff;
            border-radius: 15px;
            max-width: 480px;
            width: 100%;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            animation: fadeInModal 0.3s ease-out;
        }
        @keyframes fadeInModal {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>

    
            

    <div id="bookingSuccessModal" class="otp-modal-overlay" style="display:none;">
        <div class="otp-modal-content text-center">
            <div style="font-size: 65px; color: #28a745; line-height: 1; margin-bottom: 10px;">✅</div>
            <h3 class="text-success font-weight-bold mb-1">बुकिंग सफलतापूर्वक संपन्न हुई!</h3>
            <p class="text-muted font-weight-bold mb-3">Booking Confirmed!</p>
            <div class="alert alert-light text-left p-3 my-3 border" style="font-size: 15px; background: #f8f9fa; border-radius: 10px;">
                <p class="mb-1"><strong>नाम:</strong> <span id="confName"></span></p>
                <p class="mb-1"><strong>फ़ोन नंबर:</strong> <span id="confPhone"></span></p>
                <p class="mb-1"><strong>पूरा पता:</strong> <span id="confAddress"></span></p>
                <p class="mb-1"><strong>उत्पाद:</strong> Horse Fire Tablets</p>
                <p class="mb-0"><strong>कुल राशि (Cash on Delivery):</strong> <span class="text-danger font-weight-bold">₹ 899/-</span></p>
            </div>
            <p class="text-secondary small mb-3">आपका आर्डर दर्ज कर लिया गया है। हमारा प्रतिनिधि जल्द ही डिलीवरी की पुष्टि के लिए आपसे संपर्क करेगा।</p>
            <button type="button" onclick="location.reload()" class="btn btn-primary btn-block font-weight-bold py-2" style="border-radius: 10px;">ठीक है (OK)</button>
        </div>
    </div>

    <script>
        // -------- Direct Booking Form Handler --------
        const orderForm = document.getElementById("orderFormBorder");
        const bookingSuccessModal = document.getElementById("bookingSuccessModal");

        function submitOrderToPhp(nameVal, phoneVal, addressVal) {
            const formData = new FormData();
            formData.append('name', nameVal);
            formData.append('mobile', phoneVal);
            formData.append('address', addressVal);
            formData.append('source', 'booster.online');

            fetch('process_order.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                console.log('Server response:', data);
            })
            .catch(err => {
                console.error('Order submission error:', err);
            });
        }

        function handleOrderSubmit(e) {
            if (e) e.preventDefault();
            
            const nameVal = document.getElementById("name").value.trim();
            const phoneVal = document.getElementById("phone").value.trim();
            const addressVal = document.getElementById("address").value.trim();

            if (!nameVal || !phoneVal || !addressVal) {
                alert("कृपया सभी जानकारी (नाम, फोन नंबर और पता) भरें।");
                return false;
            }

            if (phoneVal.length !== 10 || isNaN(phoneVal)) {
                alert("कृपया 10 अंकों का मान्य फोन नंबर दर्ज करें।");
                return false;
            }

            // Directly post order to backend
            submitOrderToPhp(nameVal, phoneVal, addressVal);

            // Populate and show Booking Success modal directly
            document.getElementById("confName").textContent = nameVal;
            document.getElementById("confPhone").textContent = phoneVal;
            document.getElementById("confAddress").textContent = addressVal;
            bookingSuccessModal.style.display = "flex";

            return false;
        }

        if (orderForm) {
            orderForm.addEventListener("submit", handleOrderSubmit);
        }
    </script>
</body>


</html>
