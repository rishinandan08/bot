import React, { Component } from 'react';
import ChatBot from 'react-simple-chatbot';
import PropTypes from 'prop-types';
import { ThemeProvider } from 'styled-components';
import DBPedia from './posts/restart.js'
import Sname from './posts/StudentName';
import Sid from './posts/Studentid';
import Pname from './posts/professor';
import Subid from './posts/subjectid';
import Subname from './posts/subjectname';
import Subsem from './posts/Subjectsem';
import Bot from './data/bot_img.jpg';
import User from './data/me.jpeg';

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
  width: "450px",
  height: "500px",
  floating: true,
};

const input = (props) => {
  const { steps } = props;
  const studentid = steps.inputid.value;
  const studentname = steps.inputname.value;
}

input.propTypes = {
  steps: PropTypes.object,
};

input.defaultProps = {
  steps: undefined,
};

const steps=[
      {
        id: '1',
        message: "Hi! I'm RANS.",
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
          { value: 3, label: 'Course Details', trigger: 'Subject' },
          { value: 4, label: 'Study Materials', trigger: 'notes'},
          { value: 5, label: 'Conversation', trigger: 'convert'},
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
        id: 'inputid',
        user:true,
        trigger: 'Student_id',
      },
      {
        id: 'Student_id',
        component: <Sid />,
        asMessage: true,
        trigger: 'continue',
      },
      {
        id: 'inputname',
        user:true,
        trigger: 'Student_name',
      },
      {
        id: 'Student_name',
        component: <Sname />,
        asMessage: true,
        trigger: 'continue',
      },
      {
        id: 'professor',
        component: <Pname />,
        asMessage: true,
        trigger: 'continue',
      },
      {
        id: 'Subject',
        options: [
          { value: 1, label: 'ID of Subject', trigger: 'Subject_id'},
          { value: 2, label: 'Name of Subject', trigger: 'Subject_name'},
          { value: 3, label: 'Semester', trigger: 'Subject_sem'},
        ],
      },
      {
        id: 'Subject_id',
        component: <Subid />,
        asMessage: true,
        trigger: 'continue',
      },
      {
        id: 'Subject_name',
        component: <Subname />,
        asMessage: true,
        trigger: 'continue',
      },
      {
        id: 'Subject_sem',
        component: <Subsem />,
        asMessage: true,
        trigger: 'continue',
      },
      {
        id: 'notes',
        component: <a href="https://humanizerbot.herokuapp.com/notes/homepage.php"  target="_blank" rel="noreferrer" class="w3-button w3-blue w3-hover-blue">Go to the page<br/>(Click here)</a>,
        asMessage: true,
        trigger: 'continue',
      },
      {
        id: 'convert',
        options: [
          { value:1, label:'Take Note',alt:'Using Speech to text Conversation' , trigger:'stt' },
          { value:2, label:'Read Aloud', trigger:'tts' }
        ],
      },
      {
        id: 'stt',
        component: <a href="https://humanizerbot.herokuapp.com/converter.php"  target="_blank" rel="noreferrer" class="w3-button w3-blue w3-hover-blue">Go to the page<br/>(Click here)</a>,
        asMessage: true,
        trigger: 'continue',
      },
      {
        id: 'tts',
        component: <a href="https://humanizerbot.herokuapp.com/ttos.php"  target="_blank" rel="noreferrer" class="w3-button w3-blue w3-hover-blue">Go to the page<br/>(Click here)</a>,
        asMessage: true,
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
        trigger: 'restart',
      },
      {
        id: 'restart',
        component: <DBPedia />,
        waitAction: true,
        trigger: 'again',
      },
      {
        id: 'again',
        message:'Hello again',
        trigger:'5',
      },
    ];

class chatbot extends Component {
  logout = ()=>{
    //console.log("cookie",document.cookie);
    document.cookie = "PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    window.location.reload();
    document.cookie.remove('PHPSESSID');
  }
  handleClear = () => {
  this.setState({ clear: true }, () => {
    this.setState({ clear: false });
  });
}
  render () {
    return (
      <div>
        {document.cookie.indexOf('PHPSESSID') === 0?
        <>

            <div class="w3-top">
              <div class="w3-bar w3-blue w3-card" id="myNavbar">
                <a href="https://humanizerbot.herokuapp.com/" class="w3-bar-item w3-button w3-wide">RANS</a>
                <a href="https://humanizerbot.herokuapp.com/chatbot/build/" class="w3-bar-item w3-button w3-left">BOT</a>
                <button onClick={this.logout} class="w3-bar-item w3-right w3-black w3-button w3-wide"><i class="fa fa-lock"></i>Logout</button>
              </div>
            </div>

            <ThemeProvider theme={theme}>
            <ChatBot steps={steps}
            headerTitle="RANS"
            recognitionEnable={true}
            //speechSynthesis={{ enable: true, lang: 'en' }}
            botDelay="2000"
            {...config}
            botAvatar={Bot}
            userAvatar={User}
            />;
            </ThemeProvider>

      </>
      : window.location.replace('https://humanizerbot.herokuapp.com/') }
      </div>
    )
  }
}

export default chatbot;
