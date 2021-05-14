import React, { Component } from 'react';
import ChatBot from 'react-simple-chatbot';
import './App.css';
import { ThemeProvider } from 'styled-components';
import Sname from './posts/StudentName'
import Sid from './posts/Studentid'

// all available props
const theme = {
  background: '#f5f8fb',
  fontFamily: 'Helvetica Neue',
  headerBgColor: '#1E90FF',
  headerFontColor: '#fff',
  headerFontSize: '15px',
  botBubbleColor: '#1E90FF',
  botFontColor: '#fff',
  userBubbleColor: '#fff',
  userFontColor: '#4a4a4a',
};

// all available config props
const config ={
  width: "400px",
  height: "500px",
  floating: true,
};

const steps = [
  {
    id: '1',
    message: 'Hi! I am RANS.',
    trigger: '2',
  },
  {
    id: '2',
    message: 'What is your name?',
    trigger: '3',
  },
  {
    id: '3',
    user: true,
    trigger: '4',
  },
  {
    id: '4',
    message: 'Hi {previousValue}, nice to meet you!',
    trigger: '5',
  },
  {
    id: '5',
    message: 'How may i help you from the below course of actions?',
    trigger: 'choose',
  },
  {
    id: 'choose',
    options: [
      { value: 1, label: 'Student Information', trigger: 'student' },
      { value: 2, label: 'professor Information', trigger: 'professor' },
      { value: 3, label: 'Subject Information', trigger: 'Subject' },
      { value: 4, label: 'Class Notes', trigger: 'notes'},
      { value: 5, label: 'Checking availability of notes', trigger: 'test' },
      { value: 6, label: 'Conversation', trigger: 'test'},
    ],
  },
  {
    id: 'student',
    options: [
      { value: 1, label: 'USN of Student', trigger: 'Student_id'},
      { value: 2, label: 'Name of Student', trigger: 'Student_name'},
    ],
  },
  {
    id: 'Student_id',
    component: <Sid />,
    trigger: 'continue',
  },
  {
    id: 'Student_name',
    component: <Sname />,
    asMessage: '',
    trigger: 'continue',
  },
  {
    id: 'professor',
    message: 'Enter name of the professor',
    user: true,
    trigger: 'test',
  },
  {
    id: 'Subject',
    message: 'Enter the id of the Subject',
    user: true,
    trigger: 'test',
  },
  {
    id: 'notes',
    component: <GoToPage />,
    trigger: 'continue',
  },
  {
    id: 'test',
    message: 'Retrieving information',
    trigger: 'continue',
  },
  {
    id: 'continue',
    message: 'Would you like to receive any other information?',
    trigger: 'option',
  },
  {
    id: 'option',
    options: [
      { value: 1, label: 'Yes', trigger: 'choose'},
      { value: 2, label: 'No', trigger: 'no'},
    ],
  },
  {
    id: 'no',
    message: 'Thank you! Hope I was helpfull to you.',
    end: true,
  },
];

function GoToPage(){
  window.open('http://localhost/bot/notes/homepage.php',"_blank");
  return <div>
  <p>Redirecting to the page...</p>
  <p>Redirected.</p>
  </div>
}

class chatbot extends Component {
  render () {
    return (
      <ThemeProvider theme={theme}>
        <ChatBot steps={steps}
        headerTitle="RANS"
        recognitionEnable={true}
        //speechSynthesis={{ enable: true, lang: 'en' }}
        botDelay="2000"
        {...config}
         />;
      </ThemeProvider>
    )
  }
}


export default chatbot;
