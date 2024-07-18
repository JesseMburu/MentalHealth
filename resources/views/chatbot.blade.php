<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mental Health Chatbot</title>
        
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>

        <div>
            <div class="fixed bottom-0 right-0 mb-4 mr-4">
                    <button id="open-chat" class="bg-fuchsia-900 text-white py-2 px-4 rounded-md hover:bg-fuchsia-950 transition duration-300 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Chat with our Mental Health Chatbot
                    </button>
                </div>
                <div id="chat-container" class="hidden fixed bottom-16 right-4 w-96">
                    <div class="bg-sky-900 shadow-md rounded-lg max-w-lg w-full">
                        <div class="p-4 border-b bg-sky-950 text-white rounded-t-lg flex justify-between items-center">
                            <p class="text-lg font-semibold">Mental Health ChatBot</p>
                            <button id="close-chat" class="text-sky-900 hover:text-sky-950 focus:outline-none focus:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div id="chatbox" class="p-4 h-80 overflow-y-auto">
                        <!-- Chat messages will be displayed here -->
                        <div class="mb-2">
                            <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">Hello. I'll be your virtual assistant today :)</p>
                        </div>
                        </div>
                        <div class="p-4 border-t flex">
                            <input id="user-input" wire:model="message" type="text" placeholder="Type a message" class="w-full px-3 py-2 text-gray-900 border rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button id="send-button" class="bg-sky-800 text-white px-4 py-2 rounded-r-md hover:bg-sky-950 transition duration-300">Send</button>
                        </div>
                    </div>
                </div>
                <script>
                    // Check if chatbox is already declared
                    const chatbox = window.chatbox || document.getElementById("chatbox");
                    
                    const chatContainer = document.getElementById("chat-container");
                    const userInput = document.getElementById("user-input");
                    const sendButton = document.getElementById("send-button");
                    const openChatButton = document.getElementById("open-chat");
                    const closeChatButton = document.getElementById("close-chat");

                    // Check if isChatboxOpen is already declared
                    window.isChatboxOpen = window.isChatboxOpen || false;

                    // Function to toggle the chatbox visibility
                    function toggleChatbox() {
                        chatContainer.classList.toggle("hidden");
                        isChatboxOpen = !isChatboxOpen; // Toggle the state
                    }

                    // Add an event listener to the open chat button
                    openChatButton.addEventListener("click", toggleChatbox);

                    // Add an event listener to the close chat button
                    closeChatButton.addEventListener("click", toggleChatbox);

                    // Add an event listener to the send button
                    sendButton.addEventListener("click", function () {
                        const userMessage = userInput.value;
                        if (userMessage.trim() !== "") {
                            addUserMessage(userMessage);
                            respondToUser(userMessage);
                            userInput.value = "";
                        }
                    });

                    userInput.addEventListener("keyup", function (event) {
                        if (event.key === "Enter") {
                            const userMessage = userInput.value;
                            addUserMessage(userMessage);
                            respondToUser(userMessage);
                            userInput.value = "";
                        }
                    });

                    function addUserMessage(message) {
                        const messageElement = document.createElement("div");
                        messageElement.classList.add("mb-2", "text-right");
                        messageElement.innerHTML = `<p class="bg-blue-500 text-white rounded-lg py-2 px-4 inline-block">${message}</p>`;
                        chatbox.appendChild(messageElement);
                        chatbox.scrollTop = chatbox.scrollHeight;
                    }

                    function addBotMessage(message) {
                        let formattedMessage = message;

                        // Remove trailing period if it exists
                        if (formattedMessage.endsWith('.')) {
                            formattedMessage = formattedMessage.slice(0, -1);
                        }

                        // Check if the message is a number
                        if (!isNaN(formattedMessage) && typeof parseFloat(formattedMessage) === 'number') {
                            // Format the number
                            const formatter = new Intl.NumberFormat('en-US', {
                                minimumFractionDigits: 0, // minimum number of fraction digits to use
                                maximumFractionDigits: 0, // maximum number of fraction digits to use
                            });
                            formattedMessage = formatter.format(formattedMessage);
                        }

                        const messageElement = document.createElement("div");
                        messageElement.classList.add("mb-2");
                        messageElement.innerHTML = `<p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">${formattedMessage}</p>`;
                        chatbox.appendChild(messageElement);
                        chatbox.scrollTop = chatbox.scrollHeight;
                    }

                    function respondToUser(userMessage) {
                        // Replace this with your chatbot logic
                        const chatbotApiUrl = 'https://lance-flow.vercel.app/mental-health'; // Replace with your chatbot API URL

                        fetch(chatbotApiUrl, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({ message: userMessage }),
                        })
                        .then(response => response.json())
                        .then(data => {
                            addBotMessage(data.response); // Replace 'data.response' with the actual path to the response in the returned data
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                    }

                    // Automatically open the chatbox on page load
                    // toggleChatbox();

                </script>
            </div>

        </div>

    </body>
</html>