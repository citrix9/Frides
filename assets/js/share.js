const whatsapp = document.querySelector('.whatsapp')
const telegram = document.querySelector('.telegram')
const twitter = document.querySelector('.twitter')
const facebook = document.querySelector('.facebook')

const pageUrl =location.href
const message = 'Can you offer a ride? Or need one? Check Frides now'
const fullmsg=pageUrl. message

const whatsappApi = `https://wa.me/?text=${fullmsg}. ${message}`;
const telegramApi = `https://t.me/share/url?url=${pageUrl}&text=${message}`
const twitterApi = `https://twitter.com/intent/tweet?text=${message}.${pageUrl}`
const facebookApi=`https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse`

whatsapp.addEventListener('click', () => {
    window.open(url = whatsappApi, target='blank')
})

telegram.addEventListener('click', () => {
    window.open(url = telegramApi, target='blank')
})

twitter.addEventListener('click', () => {
    window.open(url = twitterApi, target='blank')
})
facebook.addEventListener('click', () => {
    window.open(url = facebookApi, target='blank')
})