import React, { Component } from 'react';
import { Col, Row } from "react-flexbox-grid";
import { introduction } from "../../../data";

class Preview extends Component {

    render() {

        let { videoData, selectedId } = this.props;
        if (videoData) {
            return (
                <div className="previewContainer animation">
                    <div className="gif"
                        style={{
                            backgroundImage: `url("${videoData.gif}")`
                        }}></div>
                    <h2>{videoData.quote.fr}</h2>
                    <p>{videoData.legend.fr}</p>
                </div>
            );
        } else {
            if (selectedId !== 'introduction') {
                return (
                    <div className="previewContainer">
                        <div className="gif"
                            style={{
                                backgroundImage: `url("${introduction.gif}")`
                            }}></div>
                        <h2>{introduction.quote.fr}</h2>
                        <p>{introduction.legend.fr}</p>

                    </div>
                );
            } else {
                return (
                    <div>
                        Loading...
                    </div>
                )
            }
        }
    }
}

export default Preview;