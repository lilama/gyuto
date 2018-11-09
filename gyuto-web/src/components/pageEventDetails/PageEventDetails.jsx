import React, { Component } from "react";
import { events } from "../data";

class PageEventDetails extends Component {
  render() {
    const id = `${this.props.match.params.id}`; // the match.params.id props fetch the id from the URL

    return (
      <div className="eventDetailsContainer">
        <div className="headingWrapper">
          <h2>{events[id].title}</h2>
          <h3>
            Du {events[id].date.start} au {events[id].date.start} de{" "}
            {events[id].hour.start} à {events[id].hour.end}, à{" "}
            {events[id].adress.city}
          </h3>
        </div>

        <img src={events[id].image} alt="Event cover" />
        <p>{events[id].description.fr}</p>
        <p className="bold">
          Lieu : {events[id].adress.place} , {events[id].adress.number}{" "}
          {events[id].adress.street}, {events[id].adress.zipcode}{" "}
          {events[id].adress.city}, {events[id].adress.country}
        </p>
        <a href={events[id].image}>Plus d'information</a>
      </div>
    );
  }
}

export default PageEventDetails;
