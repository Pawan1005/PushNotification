importScripts('https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.14.6/firebase-messaging.js');

const firebaseConfig = {
    apiKey: "AIzaSyCzcnwprI0IedPnnHKLzc4fL7SnmLVTRRM",
    authDomain: "pushnotification-466c2.firebaseapp.com",
    projectId: "pushnotification-466c2",
    storageBucket: "pushnotification-466c2.appspot.com",
    messagingSenderId: "980470470521",
    appId: "1:980470470521:web:7f175985798c7043f9c1a8",
    measurementId: "G-LRCT6YWXHZ"
};
firebase.initializeApp(firebaseConfig);

const messaging=firebase.messaging();

messaging.setBackgroundMessageHandler ( function (payload) {
    console.log(payload)
    const notification=json.parse(payload);
    const notificationOption={
        body:notification.body,
        icon: notification.icon
    }
    return self.ServiceWorkerRegistration.showNotification(payload.notification.title, notificationOption);
});
