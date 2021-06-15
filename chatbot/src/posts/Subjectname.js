import React from 'react';
import SubjectData from '../data/subject.json'
import {useState} from 'react'
import '../App.css'

function SubName() {
  const [searchTerm, setSearchTerm] = useState('');
    return (
      <div className="PostList">
      <input
        type="text"
        placeholder="Search.."
        onChange={(event) =>{
          setSearchTerm(event.target.value)
        }}
      />
        {SubjectData.filter((val) => {
          if (searchTerm === ""){
            return null
          } else if (val.coursename.toLowerCase().includes(searchTerm.toLowerCase())) {
            return val
          }
          return null
        }).map( (val, key )=>{
          return (
            <div className="subject" key={key}>
            <h1>Subject Information</h1>
            <p>CourseId: {val.courseid} </p>
            <p>CourseName: {val.coursename} </p>
            <p>Year: {val.year}</p>
            <p>Semester: {val.sem} </p>
            <p>Professor: {val.professor} </p>
            <p>Creadits: {val.creadits} </p>
            <p>Hours: {val.hours}</p>
            </div>
        );
        })}
      </div>
    );
}


export default SubName;
