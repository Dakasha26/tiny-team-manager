import React, {useState} from 'react';
import { Column } from 'devextreme-react/data-grid';
import DataGridTemplate from "./AdditionalComponents/DataGridTemplate";
import DataRequester from "./DataRequester";


function Events() {
	const [mainData] = useState(DataRequester.createDataSource([], 'events'))
	return (
		<div>
			<h2 className="Table-header">Список мероприятий</h2>
			<DataGridTemplate dataSource={mainData} columns={[
				<Column dataField="id" caption="Название" />,
				<Column dataField="url" caption="URL"/>,
				<Column dataField="pointsNumber" caption="Количество баллов"/>,
				<Column dataField="comment" caption="Комментарий"/>
			]}
			/>
		</div>
	);
}

export default Events;