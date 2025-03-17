
<!-- Trigger Button -->
<button class="chat-toggle">Chat</button>

<!-- Chat Container -->
<div class="chat-container">
  <div class="chat-header">
    <h3>Chat Support</h3>
    <span class="close-btn">&times;</span>
  </div>
  
  <div class="chat-messages">
    <!-- Messages will be inserted here -->
  </div>
  
  <div class="chat-input">
    <input type="text" placeholder="Type your message...">
    <button class="send-btn">Send</button>
  </div>
</div>

    <style>

        .chat-toggle {
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 15px 25px;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .chat-container {
        display: none;
        position: fixed;
        bottom: 80px;
        right: 20px;
        width: 350px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .chat-header {
        padding: 15px;
        background: #007bff;
        color: white;
        border-radius: 10px 10px 0 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .chat-messages {
        height: 300px;
        overflow-y: auto;
        padding: 15px;
        }

        .chat-input {
        display: flex;
        padding: 15px;
        border-top: 1px solid #ddd;
        }

        .chat-input input {
        flex: 1;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 20px;
        margin-right: 10px;
        }

        .send-btn {
        padding: 10px 20px;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        }

        /* Message Bubbles */
        .message {
        margin: 10px 0;
        padding: 10px 15px;
        border-radius: 15px;
        max-width: 80%;
        }

        .user-message {
        background: #007bff;
        color: white;
        margin-left: auto;
        }

        .bot-message {
        background: #f1f1f1;
        margin-right: auto;
        }

    </style>

    <script>
        document.querySelector('.chat-toggle').addEventListener('click', () => {
        document.querySelector('.chat-container').style.display = 'block';
        });

        document.querySelector('.close-btn').addEventListener('click', () => {
        document.querySelector('.chat-container').style.display = 'none';
        });

        // Send message functionality
        document.querySelector('.send-btn').addEventListener('click', sendMessage);
        document.querySelector('.chat-input input').addEventListener('keypress', (e) => {
        if (e.key === 'Enter') sendMessage();
        });

        const qaList = [
            {
            triggers: ['hi', 'hello', 'hey', 'good morning', 'good afternoon', 'good evening', 'greetings', 'hi there', 'hello there', 'hey there', 'hlw'],
            responses: [
                'Hi there! how can I assist you today?',
                'Hello! what can I do for you?',
                'Hey! how can I help?',
                'Good morning! how can I assist you today?',
                'Good afternoon! what can I do for you?',
                'Good evening! how can I help?',
                'Greetings! how can I assist you?',
                'Hi there! what can I do for you?',
                'Hello there! how can I help?',
                'Hey there! what can I assist you with?',
                'Hi there! how can I assist you today?'
            ]
            },

            // Help Requests
            {
            triggers: ['can you help me', 'can you help us', 'can you help', 'help please', 'help plz', 'need help', 'assist me', 'can you assist', 'support needed', 'help me out', 'help', 'can you help me', 'support', 'need help'],
            responses: [
                'Of course! what do you need help with?',
                'Sure! how can I assist you?',
                'Yes, I can help. what do you need?',
                'I’m here to help! what’s the issue?',
                'Sure, what do you need help with?',
                'I’m here to assist. what’s the problem?',
                'Of course! how can I assist you?',
                'Yes, I can assist. what do you need?',
                'I’m here to support you. what’s the issue?',
                'Sure! what do you need help with?'
            ]
            },

            // Technical Support
            {
            triggers: ['my computer is slow', 'internet is not working', 'phone won’t turn on', 'software crashed', 'printer not working'],
            responses: [
                'Try restarting your computer or closing unused applications.',
                'Check your router or contact your internet service provider.',
                'Try charging it or performing a hard reset.',
                'Restart the software or reinstall it if needed.',
                'Check the connections and ensure it has enough ink and paper.'
            ]
            },

            // Company Information
            {
            triggers: ['tell me about setara group', 'what is setara group', 'setara group', 'setara group history', 'setara group info', 'setara group details', 'setara'],
            responses: [
                'setara group, founded by the visionary AKM Salahuddin in 1985, embarked on its journey as an export-oriented manufacturer of readymade garments. Building upon this legacy, Anwar Kamal Pasha, his son, took a bold step in 2004, giving rise to our esteemed sister concern, Moon Readywears Limited. Today, we proudly collaborate with globally acclaimed high street brands, scaling up our operations while maintaining an unwavering commitment to excellence.'
            ]
            },

            {
            triggers: ['when was the company founded?', 'when was the company established?', 'when was the company formed?', 'when was the company created?', 'when was the company set up?', 'company founded?', 'company established?', 'company formed?', 'company created?', 'company set up?', 'established?', 'founded?', 'formed?', 'created?', 'set up?'], // Fixed missing comma
            responses: [
                'setara group was founded in 1985.'
            ]
            },

            {
            triggers: ['who is the founder of the company?', 'who founded the company?', 'who established the company?', 'established', 'who created the company?', 'who set up the company?', 'who established', 'who founded', 'who created', 'who set up'],
            responses: [
                'The company was founded by AKM Salahuddin.'
            ]
            },

            {
            triggers: ['what was the initial vision or goal of the company?', 'what was the company mission?', 'what was the company purpose?', 'what was the company objective?', 'what was the company aim?'],
            responses: [
                'The company embarked on its journey as an export-oriented manufacturer of readymade garments.'
            ]
            },

            {
            triggers: ['what were the main challenges during the early years?', 'what obstacles did the company face in the beginning?', 'what difficulties did the company encounter at the start?', 'what were the initial hurdles for the company?', 'what challenges did the company overcome in the early days?'],
            responses: [
                'Specific challenges during the early years are not detailed on the website. however, the company has grown and expanded over the years.'
            ]
            },

            {
            triggers: ['how has the company grown over the years?', 'what milestones has the company achieved?', 'how has the company evolved since its inception?', 'what progress has the company made over time?', 'how has the company developed since its establishment?'],
            responses: [
                "In 2004, Anwar Kamal Pasha, the founder's son, established Moon Readywears Limited, a sister concern of setara group. The company has also collaborated with high street brands."
            ]
            },

            {
            triggers: ['what major milestones has the company achieved?', 'what significant accomplishments has the company made?', 'what key achievements has the company reached?', 'what notable successes has the company had?', 'what important milestones has the company reached?'],
            responses: [
                'The company has been in the RMG sector for 38 years, producing over 10 million high-quality garment pieces annually and employing over 2,000 individuals.'
            ]
            },

            {
            triggers: ['what are the core values of the company?', 'what principles guide the company’s operations?', 'what values does the company prioritize?', 'what ethics does the company uphold?', 'what standards does the company follow?'],
            responses: [
                'The company is committed to excellence, integrity, innovation, and sustainability.'
            ]
            },

            {
            triggers: ['what is the company’s vision for the future?', 'what are the company’s goals for the upcoming years?', 'what does the company aim to achieve in the future?', 'what plans does the company have for the coming years?', 'what is the company’s future outlook?'],
            responses: [
                'The company aims to further expand its operations, maintain its commitment to excellence, and continue collaborating with high street brands.'
            ]
            },

            {
            triggers: ['what are the company’s main products or services?', 'what does the company specialize in?', 'what are the primary offerings of the company?', 'what products or services does the company provide?', 'what does the company produce or offer?'],
            responses: [
                'The company specializes in the manufacturing of readymade garments and collaborates with high street brands.'
            ]
            },
            
            {
                triggers: ['chairman of the company', 'chairman', 'runing chairman', 'pasha', 'anwar', 'anwar kamal pasha',],
                responses: [
                    'The chairman of the company is Anwar Kamal Pasha. Anwar is a highly accomplished businessman. Currently,  Vice Chairman of Prime University and Chairman of CVC. To celebrate his contribution to this industry and economy, he was awarded CIP (Commercially Important Person).'
                ],
            },
            
            {
                triggers: ['managing director of the company', 'managing director', 'runing managing director', 'asef', 'asef ahmed',],
                responses: [
                    "The managing director of the company is Asef Kamal Pasha. Asef is a Business Technology Management graduate who has brought the smart and digital aspect of manufacturing into Moon Readywear's operations. He is now the Managing Director looking after existing & future operations."
                ],
            },
            
            {
                triggers: ['director of the company', 'director', 'runing director', 'afra pasha', 'afra',],
                responses: [
                    'The director of the company is Afra Pasha. Afra is a Materials Engineer, with a specialisation in Energy Tech. She has experience in Aerospace Engineering and Strategic Consulting. With her diverse experience, she is developing sustainability in our business.'
                ],
            }
            // Removed trailing invalid text

        // Add all other categories similarly...
        ];

        function sendMessage() {
        const input = document.querySelector('.chat-input input');
        const message = input.value.trim();
        
        if (message) {
            // Add user message
            const userMsg = document.createElement('div');
            userMsg.className = 'message user-message';
            userMsg.textContent = message;
            document.querySelector('.chat-messages').appendChild(userMsg);
            
            // Clear input
            input.value = '';

            // Process response
            const userInput = message.toLowerCase().trim();
            let botResponse = 'I’m sorry, I didn’t understand. Could you rephrase that?';

            // Check all Q&A pairs
            qaList.forEach(qa => {
            if (qa.triggers.includes(userInput)) {
                botResponse = qa.responses[Math.floor(Math.random() * qa.responses.length)];
            }
            });

            // Add bot response
            setTimeout(() => {
            const botMsg = document.createElement('div');
            botMsg.className = 'message bot-message';
            botMsg.textContent = botResponse;
            document.querySelector('.chat-messages').appendChild(botMsg);
            
            // Auto-scroll to bottom
            const messagesContainer = document.querySelector('.chat-messages');
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
            }, 1000);
        }
        }

    </script>