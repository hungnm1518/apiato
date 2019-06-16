// layout is an array of objects
const layoutLg = [
  {i: '0', x: 0, y: 0, w: 1, h: 17, static: true, cardClass: 'card-accent-primary', cardHeader: 'Static Card'},
  {i: '1', x: 1, y: 0, w: 1, h: 17, cardClass: 'card-accent-secondary'},
  {i: '2', x: 2, y: 0, w: 1, h: 17, cardClass: 'card-accent-success'},
  {i: '3', x: 0, y: 1, w: 1, h: 17, cardClass: 'card-accent-info'},
  {i: '4', x: 1, y: 1, w: 1, h: 17, cardClass: 'card-accent-warning'},
  {i: '5', x: 2, y: 1, w: 1, h: 17, cardClass: 'card-accent-danger'},
];
const layoutMd = [
  {i: '0', x: 0, y: 0, w: 1, h: 24, static: true, cardClass: 'card-accent-primary', cardHeader: 'Static card'},
  {i: '1', x: 1, y: 0, w: 1, h: 24, cardClass: 'card-accent-secondary'},
  {i: '2', x: 2, y: 0, w: 1, h: 24, cardClass: 'card-accent-success'},
  {i: '3', x: 0, y: 1, w: 1, h: 24, cardClass: 'card-accent-info'},
  {i: '4', x: 1, y: 1, w: 1, h: 24, cardClass: 'card-accent-warning'},
  {i: '5', x: 2, y: 1, w: 1, h: 24, cardClass: 'card-accent-danger'}
]
const layoutSm = [
  {i: '0', x: 0, y: 0, w: 1, h: 1, static: true, cardClass: 'card-accent-primary', cardHeader: 'Static card'},
  {i: '1', x: 1, y: 0, w: 1, h: 1, cardClass: 'card-accent-secondary'},
  {i: '2', x: 0, y: 1, w: 1, h: 1, cardClass: 'card-accent-success'},
  {i: '3', x: 1, y: 1, w: 1, h: 1, cardClass: 'card-accent-info'},
  {i: '4', x: 0, y: 2, w: 1, h: 1, cardClass: 'card-accent-warning'},
  {i: '5', x: 1, y: 2, w: 1, h: 1, cardClass: 'card-accent-danger'}
];
const layoutXs = [
  {i: '0', x: 0, y: 0, w: 1, h: 1, static: true, cardClass: 'card-accent-primary', cardHeader: 'Static card'},
  {i: '1', x: 0, y: 1, w: 1, h: 1, cardClass: 'card-accent-secondary'},
  {i: '2', x: 0, y: 2, w: 1, h: 1, cardClass: 'card-accent-success'},
  {i: '3', x: 0, y: 3, w: 1, h: 1, cardClass: 'card-accent-info'},
  {i: '4', x: 0, y: 4, w: 1, h: 1, cardClass: 'card-accent-warning'},
  {i: '5', x: 0, y: 5, w: 1, h: 1, cardClass: 'card-accent-danger'}
];

const layouts = { xl: layoutLg, lg: layoutLg, md: layoutMd, sm: layoutSm, xs: layoutXs };

export default layouts;
