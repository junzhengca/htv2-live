// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here, other Firebase libraries
// are not available in the service worker.
importScripts('https://www.gstatic.com/firebasejs/4.8.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/4.8.1/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
firebase.initializeApp({
    apiKey: "AIzaSyAhjuSeGpUjWXwHrm7TZnpQb03iTHxCzno",
    authDomain: "hack-the-valley-2-17d2d.firebaseapp.com",
    databaseURL: "https://hack-the-valley-2-17d2d.firebaseio.com",
    projectId: "hack-the-valley-2-17d2d",
    storageBucket: "hack-the-valley-2-17d2d.appspot.com",
    messagingSenderId: "242336252707"
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function(payload) {
    console.log('[firebase-messaging-sw.js] Received background message ', payload);
    // Customize notification here
    const notificationOptions = {
      body: payload.data.body
    };
  
    return self.registration.showNotification(payload.data.title,
        notificationOptions);
  });
  