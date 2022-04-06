<?php

ob_start();
$API_KEY = '5177321568:AAGyKTkWGTQxs-Wv-cpNbdWUDgdrXLQb63g'
define('API_KEY',$API_KEY);
function MARKS($method,$datas=[]){
 $url = "https://api.telegram.org/bot".API_KEY."/".$method;
 $ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,$url);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
 $res = curl_exec($ch);
 if(curl_error($ch)){
 var_dump(curl_error($ch));
 }else{
 return json_decode($res);
 }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$re_msgid  = $update->message->reply_to_message->message_id;
$from_id = $message->from->id;
$text = $message->text;
$chat_id  = $message->chat->id;
$user  = $update->message->from->username;
$from_user = $message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$info  = json_decode($get, true);
$sudo = 5156261167
$name = $update->message->from->first_name;


if($text == "/start"){
MARKS('sendphoto',[
'photo'=>"https://t.me/fffffffff001/43",
'chat_id'=>$chat_id,
'caption'=>"
📮┇مرحباً بك عزيزي
♻️┇في بوت رشق مشاهدات - متابعين انستا
⭐️┇لن تحتاج لتجميع النقاط والمطاولة والتعب
📌┇تجد في البوت اكثر من 10 مواقع لرشق
🔰┇منتقاة بعناية لنجلب لكم أفضل محتوى
🦁┇يتوفر في البوت كل ما تحتاجة لزيادة متابعين حسابك
🌟┇يتوفر أيضا تطبيق فالوگير اخر تحديث
---------------مطور الملف حيدر وحيد صبرل",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"👁‍🗨┇رشق مشاهدات"]],[['text'=>"📌┇رشق ستوري"],
['text'=>"📮┇رشق متابعين"]],[['text'=>"♻️┇رشق فلورز تركي"],
['text'=>"🔰┇مواقع اخرى"]],
[['text'=>"🔍┇مواقع 2018"],['text'=>"🔍┇مواقع 2019"]],
[['text'=>"🔗┇برنامج فالوگير"],
['text'=>"🗂┇تهكير انستا"]],
[['text'=>"⏰┇تحديث البوت"]],
]
])
]);
}

if($text == "📌┇رشق ستوري"){
MARKS('sendphoto',[
'photo'=>"https://t.me/fffffffff001/44",
'chat_id'=>$chat_id,
'caption'=>"
📮┇مرحباً بك عزيزي
📌┇اليك موقع رشق مشاهدات ستوري
💬┇الموقع لايحتاج لباسوورد حسابك
♻️┇لكن يجب ان يكون حسابك حقيقي
🔰┇ومؤكد برقم او ايميل
🔍┇ ادخل للموقع للتجربة بنفسك⬇️",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضفط للدخول للموقع🔰", 'url'=>"https://igtools.in/story"]],
]
])
]);
}



if($text == "👁‍🗨┇رشق مشاهدات"){
MARKS('sendphoto',[
'photo'=>"https://t.me/fffffffff001/46",
'chat_id'=>$chat_id,
'caption'=>"
📮┇مرحباً بك عزيزي
⚡️┇اليك موقع رشق مشاهدات منشورات
💬┇الموقع لايحتاج لباسوورد حسابك
🦁┇لكن يجب ان يكون حسابك حقيقي
📌┇ومؤكد برقم او ايميل
🔍┇ ادخل للموقع للتجربة بنفسك⬇️",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضفط للدخول للموقع🔰", 'url'=>"https://igtools.in/views"]],
]
])
]);
}

if($text == "📮┇رشق متابعين"){
MARKS('sendphoto',[
'photo'=>"https://t.me/fffffffff001/48",
'chat_id'=>$chat_id,
'caption'=>"
📮┇مرحباً بك عزيزي
👥┇اليك موقع رشق متابعين 
⏰┇الموقع لايحتاج لباسوورد حسابك
⚙️┇لكن يجب ان يكون حسابك حقيقي
🗂┇ومؤكد برقم او ايميل
🔍┇ ادخل للموقع للتجربة بنفسك⬇️",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضفط للدخول للموقع🔰", 'url'=>"https://takipcihilecin.com/"]],
]
])
]);
}

if($text == "♻️┇رشق فلورز تركي"){
MARKS('sendphoto',[
'photo'=>"https://t.me/fffffffff001/49",
'chat_id'=>$chat_id,
'caption'=>"
📮┇مرحباً بك عزيزي
💬┇اليك موقع فلورز تركي  
⏰┇الموقع يحتاج لباسوورد حسابك
⚙️┇لكن يجب ان يكون حسابك حقيقي
🗂┇ومؤكد برقم او ايميل
🔍┇ ادخل للموقع للتجربة بنفسك⬇️",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضفط للدخول للموقع🔰", 'url'=>"https://www.insfollow.com/logins"]],
]
])
]);
}

if($text == '🔗┇برنامج فالوگير'){
 MARKS('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/fffffffff001/42",
]);
MARKS('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📮┇ مرحبا بك عزيزي
♻️┇إليك تطبيق فالوگير اخر تحديث
🗂┇التطبيق يتم تحديثة كل مره وتنزيلة لكم
🔰┇النسخه الرسمية من الشركة
💬┇البرقية 3.9",
]);
}

if($text == ""){
MARKS('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📮┇ مرحبا بك عزيزي
💬┇ اليك مواقع اخرى للرشق
🔍┇ جميع المواقع مجربة جميعها
📌┇ لكي نضمن محتوى خالي من الاحتيال",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"FOLLWOERS 1", 'url'=>"https://www.pro3-tech.info/p/redirect.html??&&url=_https://auto-sm.com/"]],[['text'=>"FOLLWOERS 2", 'url'=>"https://goo.gl/p8Rz4t"]],
[['text'=>"FOLLWOERS 3", 'url'=>"https://goo.gl/LL8MRr"]],[['text'=>"FOLLWOERS 4", 'url'=>"https://goo.gl/EVdecD"]],
[['text'=>"FOLLWOERS 5", 'url'=>"https://www.pro3-tech.info/p/redirect.html??&&url=_https://auto-sm.com/"]],
]
])
]);
}


if($text == "🔍┇مواقع 2018"){
MARKS('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📮┇ مرحبا بك عزيزي
🌟┇ اليك افضل المواقع 
🔗┇ لعام 2018 حصراً
📌┇ المواقع مجربة جميعها ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الموقع الاول🔍", 'url'=>"https://goo.gl/QAeEfb"]],[['text'=>"الموقع الثاني 🔍", 'url'=>"https://goo.gl/UeYWY5"]],
[['text'=>"الموقع الثالث🔍", 'url'=>"https://goo.gl/2e3wS7"]],[['text'=>"الموقع الرابع🔍", 'url'=>"https://goo.gl/ZqGU8D"]],
[['text'=>"الموقع الخامس🔍", 'url'=>"https://goo.gl/tjDLTS"]],
]
])
]);
}



if($text == "🔍┇مواقع 2019"){
MARKS('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📮┇ مرحبا بك عزيزي
🌟┇ اليك افضل المواقع 
🔗┇ لعام 2019 حصراً
📌┇ المواقع مجربة جميعها ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الموقع الاول🔍", 'url'=>"https://goo.gl/Dnfmvf"]],[['text'=>"الموقع الثاني 🔍", 'url'=>"https://goo.gl/8yqkFM"]],
[['text'=>"الموقع الثالث🔍", 'url'=>"https://goo.gl/hMJjBu"]],[['text'=>"الموقع الرابع🔍", 'url'=>"https://instagramevi.com/"]],
[['text'=>"الموقع الخامس🔍", 'url'=>"http://www.instazi.com/"]],
]
])
]);
}

if($text == '🗂┇تهكير انستا'){
 MARKS('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>"https://t.me/fffffffff001/50",
]);
MARKS('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📮┇ مرحبا بك عزيزي
♻️┇ اليك اندكس تهكير انستا
🗂┇ هذه ملفات موقع التهكير
🔰┇ قم برفعها ومبروك عليك الموقع
💬┇ الملف ينباع بفلوس الكم بلاش كسر روس",
]);
}

if($text == ""){
MARKS('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🗂┇مرحبا عزيزي
🗂┇تم تحديث ملفات البوت 
🗂┇وتحديث البوت لاخر اصدار
🗂┇اضغط /start لبدء استخدام التحديث
",
]);
}


if __name__ == "__main__":
    bot.remove_webhook()
    bot.set_webhook(url="https://alsoeee.herokuapp.com/"+str(API_KEY))
    server.run(host="0.0.0.0", port=int(os.environ.get("PORT", 5000)))


