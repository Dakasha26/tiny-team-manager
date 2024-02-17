import React, { useEffect, useState } from 'react';
import { Column, Lookup } from 'devextreme-react/data-grid';
import DataGridTemplate from "./AdditionalComponents/DataGridTemplate";
import DataRequester from "./DataRequester";


function Activities() {
	const [mainData] = useState(DataRequester.createDataSource([], 'activities'));
	const [membersData, setMembersData] = useState();
	const [eventsData, setEventsData] = useState();
	useEffect( () => {
		DataRequester.getAdditionalData('events', setEventsData);
		DataRequester.getAdditionalData('members', setMembersData)
	}, []);
	return (
		<div>
			<h2 className="Table-header">Список активностей</h2>
			<DataGridTemplate dataSource={mainData} columns={[
				<Column dataField="id" caption="№" allowEditing={false} />,
				<Column dataField="memberId" caption="Участник">
					<Lookup dataSource={membersData} valueExpr='id' displayExpr='secondName'/>
				</Column>,
				<Column dataField="event" caption="Событие">
					<Lookup dataSource={eventsData} valueExpr='id' displayExpr='id'/>
				</Column>,
				<Column dataField="isManager" caption="Менеджер" dataType="boolean" />,
				<Column dataField="location" caption="Место проведения"/>,
				<Column dataField="dateTime" caption="Время проведения"/>
			]}
			/>
		</div>
	);
}

export default Activities;

