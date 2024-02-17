import DataGrid, {Column, Editing, Lookup, Paging, Selection} from "devextreme-react/data-grid";
import {Template} from "devextreme-react/core/template";
import React from "react";
import DataRequester from "./Components/DataRequester";
import 'bootstrap/dist/css/bootstrap.min.css';

let data = [];
const dataSource = DataRequester.createDataSource(data, 'GroupActivity');

export default class GroupActivity extends React.Component {
    constructor(props) {
        super(props);
    }

    render(){
        return (
            <div className={`container`}>
                <h2 className="Table-header">Активность за текущий семестр</h2>
                <DataGrid id="gridContainer"
                          dataSource={ dataSource }
                          showBorders={true}
                    // selectedRowKeys={this.state.selectedItemKeys}
                          onSelectionChanged={this.selectionChanged}
                          onToolbarPreparing={this.onToolbarPreparing}
                          columnAutoWidth={true} >
                    <Selection mode="multiple" />
                    <Paging enabled={false} />
                    <Editing
                        mode="cell"
                        allowUpdating={false}
                        allowAdding={false}
                        allowDeleting={false} />
                    <Column dataField="id" caption="№" />
                    <Column dataField="event_name" caption="Название мероприятия" />
                    <Column dataField="dateTime" caption="Дата" />
                    <Column dataField="location" caption="Место проведения" />
                    {/*<Column dataField="membersNumber" caption="Участвовало" />
                    <Column dataField="managersNumber" caption="Количество организаторов" />*/}
                </DataGrid>
            </div>
        )
    }
}

