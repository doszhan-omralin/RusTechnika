import telebot

API_TOKEN = '5967111699:AAGQ2H2lHZLuz-pCf_1m0tefcftWOLcvxsM'

bot = telebot.TeleBot(API_TOKEN)


# Handle '/start' and '/help'
@bot.message_handler(commands=['help', 'start'])
def send_welcome(message):
    bot.reply_to(message, "Привет, Рустам!")

@bot.message_handler(commands=['s'])
def send_goodbay(message):
    bot.reply_to(message, "Пока, Рустам!")

@bot.message_handler(commands=['Добавить'])
def send_goodbay(message):
    bot.reply_to(message, "Вы успешно добавили новый материал")

# Handle all other messages with content_type 'text' (content_types defaults to ['text'])
@bot.message_handler(func=lambda message: True)
def echo_message(message):
    bot.reply_to(message, message.text)


bot.infinity_polling()